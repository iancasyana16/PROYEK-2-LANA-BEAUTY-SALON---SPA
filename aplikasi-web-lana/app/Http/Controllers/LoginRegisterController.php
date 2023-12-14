<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    public function registerindex()
    {
        return view ('user/register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->telepon = $request->telepon;
        $user->password = $request->password;
        $user->save();

        return back()->with('success', 'Register Successfully');
    }

    public function loginindex()
    {
        return view ('user.login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (auth()->attempt($credetials)) {
            return redirect()->route('/home')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email atau Password Salah');
        }
}
