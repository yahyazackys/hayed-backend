<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmailVerificationController extends Controller
{
    public function verify($user_id, Request $request)
    {
        if (!$request->hasValidSignature()) {
            return response()->json([
                "status" => false,
                "message" => "Verifikasi email gagal!"
            ], 400);
        }

        $user = User::findOrFail($user_id);

        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }

        return redirect()->to('/');
    }

    // public function resend()
    // {
    //     if (auth()->user()->hasVerifiedEmail()) {
    //         return response()->json(["msg" => "Email already verified."], 400);
    //     }

    //     auth()->user()->sendEmailVerificationNotification();

    //     return response()->json(["msg" => "Email verification link sent on your email id"]);
    // }
}
