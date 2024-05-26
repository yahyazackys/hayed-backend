<?php

namespace App\Http\Controllers;


use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {
        // menampilkan data user dari database
        $data = User::all();
        // dd($data);
        return view('user.index', compact('data'));
    }

    public function create()
    {
        $data = User::all();

        return view('user.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:4',
            'no_hp' => 'required|min:4|max:14',
            'gambar' => 'image|file|max:2048',
            // 'role' => 'required',
        ], [
            'name.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'password.required' => 'password harus diisi!',
            'no_hp.required' => 'No HP harus diisi!',
            // 'gambar.required' => 'Gambar harus diisi!',
        ]);



        try {
            if ($request->file('gambar')) {
                $pathGambar = $request->file('gambar')->store('user-images');

                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'no_hp' => $request->no_hp,
                    'gambar' => $pathGambar,
                    'role' => $request->role,
                ]);
            } else {
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'no_hp' => $request->no_hp,
                    'role' => $request->role,
                ]);
            }



            return redirect()->route('user')->with('success', 'Add Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Add Data Failed!');
        }
    }

    public function edit($id)
    {
        $data = User::find($id);

        return view('user.edit', compact('data'));
    }

    public function update(Request $request)
    {
        try {
            $data = User::find($request->id);

            if ($request->password) {
                $newPassword = Hash::make($request->password);
            } else {
                $newPassword = $data->password;
            }

            if ($request->file('gambar')) {

                if ($data->gambar) {
                    Storage::delete($data->gambar);
                }

                $pathGambar = $request->file('gambar')->store('user-images');

                User::where('id', $request->id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'no_hp' => $request->no_hp,
                    'gambar' => $pathGambar,
                    'role' => $request->role,
                ]);
            } else {
                User::where('id', $request->id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'no_hp' => $request->no_hp,
                    'role' => $request->role,
                ]);
            }
            return redirect()->route('user')->with('success', 'Update Data Success!');
        } catch (Exception $error) {
            return redirect()
                ->back()
                ->with('error', 'Update Data Failed!');
        }
    }

    public function delete($id)
    {
        try {
            User::destroy($id);
            return redirect('user');
        } catch (Exception $error) {
            //jika terjadi error
            return redirect()->back()->with([
                'failed' => $error->getMessage() // ambil pesan error yg di catch
            ]);
        }
    }
}
