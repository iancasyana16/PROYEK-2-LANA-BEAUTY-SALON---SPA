<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use PHPUnit\TextUI\XmlConfiguration\SuccessfulSchemaDetectionResult;

class loginAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function registerAdminIndex()
    {
        return view('loginAdmin.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registerAdminPost(Request $request)
    {
        $request->validate([
            'namaAdmin' => 'required|string|max:255',
            'alamatAdmin' => 'required|string|max:255',
            'emailAdmin' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:6',
        ]);

        // Buat objek admin
    $admin = new Admin();
    $admin->namaAdmin = $request->namaAdmin;
    $admin->alamatAdmin = $request->alamatAdmin;
    $admin->emailAdmin = $request->emailAdmin;
    $admin->password = bcrypt($request->password);

    // Simpan data admin
    $admin->save();
    
        return redirect()->route('loginAdmin.login')->with('success', 'Register Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function loginAdminIndex()
    {
        return view('loginAdmin.login');
    }

    /**
     * Display the specified resource.
     */
    public function loginAdminPost(Request $request)
    {
        $credentials = [
            'emailAdmin' => $request->emailAdmin,
            'password' => $request->password,
        ];

        //cari admin berdasarkan email
        $admin = Admin::where('emailAdmin', $request->emailAdmin)->first();

        //Periksa apakah admin ditemukan dan password cocok
        if ($admin && Hash::check($request->password, $admin->password)) {

            //Ambil ID admin yang berhasil login
            //$admin = Admin->id;
            return redirect()->route('Home.index')->with('success', 'Login berhasil');
        }

        //Jika tidak cocok, kembalikan ke halaman login
        return back()->with('error', 'Email or Password salah');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function logout()
    {
        Auth::logout();
        return view('home.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
