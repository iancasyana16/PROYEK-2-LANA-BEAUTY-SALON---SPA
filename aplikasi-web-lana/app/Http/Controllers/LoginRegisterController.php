<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Auth\Guard;


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

        Session::put('user', $user);

        // Session::put('user', $user);

        return redirect()->route('login')->with('success', 'Register successfully');
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

            Session(['user' => $user]);

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

    public function settinguser()
    {
        // $user = User::all();
        // return view('user.index', compact('user'));
        $user = session('user');
        if ($user) {
            return view('user.index', compact('user'));
        } else {
            // Handle the case when the user is not authenticated
            return redirect('/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    //     // $user = User::find($id);
    //     // return view('user.index', compact('user'));
    //     $user = User::find($id);

    // // Pastikan user ditemukan sebelum melanjutkan
    // if (!$user) {
    //     abort(404); // Atau tindakan lain sesuai kebutuhan Anda
    // }


    // return view('user.index', compact('user'));
    // }
    public function edit()
    {
        $user = session('user');
        if (!$user) {
            abort(404); // Atau tindakan lain sesuai kebutuhan Anda
        }

        return view('user.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = session('user');

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $request->validate([
            'nama' => 'required',
            'email' => 'sometimes|required|email',
            'password' => 'sometimes|required|string|min:8',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $user->update([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }
}
