<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salon = Salon::all();
        return view('admin.setting.index', compact('salon'));
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
    public function edit(string $id_salon)
    {
        //
        $salon = Salon::find($id_salon);
        return view('admin.setting.index', compact('salon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $request->validate ([
            'nama_salon' => 'required',
            'foto_salon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_salon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat_salon' => 'required',
            'weekday_buka' => 'required',
            'weekday_tutup' => 'required',
            'weekend_buka' => 'required',
            'weekend_tutup' => 'required',
        ]);
        $id_salon=$request->id_salon;
        // echo 'validate success <br>';
        // $filefoto = null;
        // $filelogo = null;

        if ($request->hasFile('foto_salon')) {
            $file1 = $request->file('foto_salon');
            $filefoto = time() . "_" . $file1->getClientOriginalName();
            $file1->storeAs('public/images', $filefoto);
            // echo 'foto_salon <br>';
        }

        if ($request->hasFile('logo_salon')) {
            $file2 = $request->file('logo_salon');
            $filelogo = time()  . "_" . $file2->getClientOriginalName();
            $file2->storeAs('public/images', $filelogo);
            // echo 'logo_salon <br>';

        }

        $salon = Salon::findOrFail($id_salon);
        $salon->update([
            'nama_salon' => $request->nama_salon,
            'foto_salon' => $filefoto,
            'logo_salon' => $filelogo,
            'alamat_salon' => $request->alamat_salon,
            'weekday_buka' => $request->weekday_buka,
            'weekday_tutup' => $request->weekday_tutup,
            'weekend_buka' => $request->weekend_buka,
            'weekend_tutup' => $request->weekend_tutup,
            'deskripsi' => $request->deskripsi,
            'visi_salon' => $request->visi_salon,
            'misi_salon' => $request->misi_salon,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,

        ]);
        // echo "update berhasil <br>";

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
