<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('user/login');
    }

    public function login(Request $request)
    {
        $credentials = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

      // Jika validasi gagal, kembalikan dengan error dan input sebelumnya
    if ($credentials->fails()) {
        return back()->withErrors($credentials)->withInput();
    }

    // Ambil kredensial dari form login
    $credentials = $request->only('email', 'password');

    // Coba melakukan otentikasi
    if (Auth::attempt($credentials)) {
        // Otentikasi berhasil, redirect ke halaman yang dimaksud
        return redirect()->intended('/');
    }

    // Otentikasi gagal, kembalikan dengan error
    return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
}
}
