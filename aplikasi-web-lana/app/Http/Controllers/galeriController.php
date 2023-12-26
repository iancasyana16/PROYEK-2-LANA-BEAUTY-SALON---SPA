<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikat;
use Illuminate\Http\RedirectResponse;

class GaleriController extends Controller
{
    public function index()
    {
        $sertif = Sertifikat::all();
        return view('galeri.index', compact('sertif'));
    }

    public function coba()
    {
        $sertif = Sertifikat::all();
        return view('gal.coba', compact('sertif'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'judul_kegiatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'caption_kegiatan' => 'required',
            'kategori' => 'required',
        ]);

        $fileName = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('public/images', $fileName);
        }

        Sertifikat::create([
            'judul_kegiatan' => $request->judul_kegiatan,
            'foto' => $fileName,
            'caption_kegiatan' => $request->caption_kegiatan,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('Galeri.index')->with(['success' => 'Data Berhasil ditambah']);
    }

    public function show($id)
    {
        // Implementasi jika diperlukan
    }

    public function showByCategory($kategori)
    {
        $sertif = Sertifikat::where('kategori', $kategori)->get();
        return view('galeri.index', compact('sertif'));
    }

    public function edit($id_sertif)
    {
        $sertifikat = Sertifikat::find($id_sertif);
        return view('galeri.edit', compact('sertifikat'));
    }

    public function update(Request $request, $id_sertif): RedirectResponse
    {
        $this->validate($request, [
            'judul_kegiatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'caption_kegiatan' => 'required',
            'kategori' => 'required',
        ]);

        $sertifikat = Sertifikat::find($id_sertif);
        $fileName = $sertifikat->foto;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('public/images', $fileName);
        }

        $sertifikat->update([
            'judul_kegiatan' => $request->judul_kegiatan,
            'foto' => $fileName,
            'caption_kegiatan' => $request->caption_kegiatan,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('Galeri.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id_sertif): RedirectResponse
    {
        $sertifikat = Sertifikat::find($id_sertif);
        $sertifikat->delete();

        return redirect()->route('Galeri.index')->with('success', 'Data berhasil dihapus.');
    }
}
