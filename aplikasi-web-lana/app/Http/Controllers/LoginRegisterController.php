<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    public function registerindex()
    {
        return view('user.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'telepon' => 'required|string|max:20',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->telepon = $request->telepon;
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with('success', 'Register Successfully');
    }

    public function loginindex()
    {
        return view('user.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && password_verify($request->password, $user->password)) {
            // Login successful
            return redirect()->route('home.index')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email atau Password Salah');
    }
    public function logout(Request $request)
    {
        // Clear the user session manually
        $request->session()->forget('user');

        return redirect('/login')->with('success', 'Logout berhasil');
    }
}
