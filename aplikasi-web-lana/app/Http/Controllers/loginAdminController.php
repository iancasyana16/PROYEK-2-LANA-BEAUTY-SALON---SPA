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
            'emailAdmin' => 'required|email|unique:admin,emailAdmin',
            'password' => 'required|string|min:6',
            'no_hp' => 'required|string',
        ]);

        // Buat objek admin
    $admin = new Admin();
    $admin->namaAdmin = $request->namaAdmin;
    $admin->emailAdmin = $request->emailAdmin;
    $admin->password = bcrypt($request->password);
    $admin->no_hp = $request->no_hp;

    // Simpan data admin
    $admin->save();

        return redirect()->route('loginAdmin')->with('success', 'Register Successfully');
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
            return redirect()->route('dashboard')->with('success', 'Login berhasil');
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
        return view('login.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $idAdmin)
    {
        //
        $admin = Admin::find($idAdmin);
        return view('admin.setting.index', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $request->validate ([
            'namaAdmin' => 'required',
            'emailAdmin' => 'disabled',
            'password' => 'disabled',
            'no_hp' => 'required',

        ]);
        $idAdmin=$request->idAdmin;

        $admin = Admin::findOrFail($idAdmin);
        $admin->update([
            'namaAdmin' => $request->namaAdmin,
            'no_hp' => $request->no_hp,

        ]);

        return redirect()->back()->with('success', 'Data Salon berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
