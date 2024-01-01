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
        //
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
    public function edit(string $id)
    {
        //
        $salon = Salon::findOrFail($id);
        // dd($salon);
        return view('admin.setting.index', compact('salon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_salon' => 'required',
            'foto_salon' => 'required',
            'logo_salon' => 'required',
            'alamat_salon' => 'required',
            'deskripsi' => 'required',
            'visi_salon' => 'required',
            'misi_salon' => 'required',
            'weekday_buka' => 'required',
            'weekday_tutup' => 'required',
            'weekend_buka' => 'required',
            'weekend_tutup' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
        ]);

        $salon = Salon::findOrFail($id);

        $salon->update($request->all());

        return redirect()->route('admin.setting.index')->with('success', 'Data Salon berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
