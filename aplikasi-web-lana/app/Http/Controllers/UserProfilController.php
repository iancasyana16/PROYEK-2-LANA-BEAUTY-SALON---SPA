<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfilController extends Controller
{
    public function index()
    {
        $salon = User::all();
        return view('admin.user.index', compact('UserProfil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_user)
    {
        //
        $salon = User::find($id_user);
        return view('admin.setting.index', compact('UserProfil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $request->validate ([
            'nama_lengkap' => 'required',
            'email' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nomor_telepon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'username' => 'required',
            'password' => 'required',
            'alamat' => 'required',

        ]);
        $id_user=$request->id_user;
        // echo 'validate success <br>';
        // $filefoto = null;
        // $filelogo = null;

        // if ($request->hasFile('foto_salon')) {
        //     $file1 = $request->file('foto_salon');
        //     $filefoto = time() . "_" . $file1->getClientOriginalName();
        //     $file1->storeAs('public/images', $filefoto);
        //     // echo 'foto_salon <br>';
        // }

        // if ($request->hasFile('logo_salon')) {
        //     $file2 = $request->file('logo_salon');
        //     $filelogo = time()  . "_" . $file2->getClientOriginalName();
        //     $file2->storeAs('public/images', $filelogo);
        //     // echo 'logo_salon <br>';

        // }

        $salon = User::findOrFail($id_user);
        $salon->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'username' => $request->alusername,
            'password' => $request->password,
            'alamat' => $request->alamat,
        ]);
        // echo "update berhasil <br>";

        return redirect()->back()->with('success', 'Data user berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
