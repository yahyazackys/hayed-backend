<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserVerify;
use App\Models\PasswordReset;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\JsonResponse;
use Laravel\Socialite\Contracts\User as SocialiteUser;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Exception\Auth\UserNotFound;
use Kreait\Firebase\Exception\FirebaseException;
use Laravel\Passport\ClientRepository;



class ApiUserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "email" => "required|unique:users|email",
            "password" => [
                "required",
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            "no_hp" => "required"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error Validation',
                'data' => $validator->errors()
            ], 400); // Changed HTTP status code to 400 (Bad Request)
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'no_hp' => $request->no_hp,
                'role' => "1",
            ]);



            return response()->json([
                'success' => true,
                'message' => 'Register Berhasil. Silahkan cek email anda untuk melakukan verifikasi!',
                'data' => $user,
            ], 200); // Changed HTTP status code to 201 (Created)
        } catch (Exception $error) {
            return response()->json([
                'success' => false,
                'message' => 'Register Gagal',
                'error' => $error->getMessage()
            ], 500);
        }
    }


    public function login(Request $request)
    {
        $data = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        Auth::attempt($data);
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $user = User::where('id', $userId)->first();

            $token = $user->createToken('auth_token')->plainTextToken;
            $cookie = cookie('token', $token, 60 * 1);

            // menggunakan format json
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Login Berhasil',
                    'data' => $user,
                    'access_token' => $token,
                    'token_type' => 'Bearer'
                ],
                200
            )->withCookie($cookie);
        } else {
            $user = null;
            // menggunakan format json
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Username / Password Salah',
                    'data' => null
                ],
                500
            );
        }
    }

    public function logout(Request $request)
    {
        try {
            $removeToken = $request->user()->currentAccessToken()->delete();
            $cookie = cookie()->forget('token');

            if ($removeToken) {
                return response()->json(
                    [
                        'success' => true,
                        'message' => 'Logout Berhasil',
                        'data' => null
                    ],
                    200
                )->withCookie($cookie);
            }
        } catch (Exception $error) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Logout Gagal',
                    'data' => $error->getMessage()
                ],
                500
            );
        }
    }

    public function verifyAccount($token): RedirectResponse
    {
        $verifyUser = UserVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;

            if (!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        return redirect()->route('login')->with('message', $message);
    }

    public function sendVerifyMail(Request $request, $email)
    {
        if (auth()->check()) {
            $user = User::where('email', $email)->first();

            if ($user) {
                $random = Str::random(40);
                $domain = URL::to('/');
                $url = $domain . '/' . $random;

                $data['url'] = $url;
                $data['email'] = $email;
                $data['title'] = 'Email Verification';
                $data['body'] = 'Please click the link below to verify your email.';

                Mail::send('auth.verifyMail', ['data' => $data], function ($message) use ($data) {
                    // $message->from('hayed-admin.com', 'Yahya Zacky Syahputra');
                    $message->to($data['email'])->subject($data['title']);
                });

                $user->remember_token = $random;
                $user->save();

                return response()->json([
                    'success' => true,
                    'message' => 'Mail sent successfully!',
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'User is not found!',
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User is not authenticated!',
            ]);
        }
    }

    public function redirectToAuth(): JsonResponse
    {
        return response()->json([
            'url' => Socialite::driver('google')
                ->redirect()
                ->getTargetUrl(),
        ]);
    }

    public function handleAuthCallback(): JsonResponse
    {
        try {
            /** @var SocialiteUser $socialiteUser */
            $socialiteUser = Socialite::driver('google')->user();
        } catch (ClientException $e) {
            return response()->json(['error' => 'Invalid credentials provided.'], 422);
        }

        /** @var User $user */
        $user = User::query()
            ->firstOrCreate(
                [
                    'email' => $socialiteUser->getEmail(),
                ],
                [
                    'email_verified_at' => now(),
                    'name' => $socialiteUser->getName(),
                    'google_id' => $socialiteUser->getId(),
                    'avatar' => $socialiteUser->getAvatar(),
                ]
            );

        return response()->json([
            'user' => $user,
            'access_token' => $user->createToken('google-token')->plainTextToken,
            'token_type' => 'Bearer',
        ]);
    }

    public function forgetPassword(Request $request)
    {
        try {

            $user = User::where('email', $request->email)->get();

            if (count($user) > 0) {

                $token = Str::random(40);
                $domain = URL::to('/');
                $url = $domain . '/reset-password?token=' . $token;

                $data['url'] = $url;
                $data['email'] = $request->email;
                $data['title'] = "Reset Password";
                $data['body'] = "Please click on below link to reset your password.";

                Mail::send('auth.forgetPasswordMail', ['data' => $data], function ($message) use ($data) {
                    // $message->from('idzteamproject@gmail.com', 'Yahya Zacky ');
                    $message->to($data['email'])->subject($data['title']);
                });

                $datetime = Carbon::now()->format('Y-m-d H:i:s');
                PasswordReset::updateOrCreate(
                    ['email' => $request->email],
                    [
                        'email' => $request->email,
                        'token' => $token,
                        'created_at' => $datetime,

                    ]
                );

                return response()->json([
                    'success' => true,
                    'message' => 'Please check your email to reset your password!',
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'User Not Found!',
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
