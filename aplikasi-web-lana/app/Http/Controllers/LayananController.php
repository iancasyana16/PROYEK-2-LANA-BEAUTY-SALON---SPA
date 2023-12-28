<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data permintaan yang masuk
        $request->validate([
            'nama_layanan' => 'required|string',
            'foto_layanan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan aturan validasi untuk gambar
            'desk_layanan' => 'required|string',
            'harga_layanan' => 'required|numeric',
        ]);

        $fileName = null;

        // Penanganan unggah file (foto)
        if ($request->hasFile('foto_layanan')) {
            $file = $request->file('foto_layanan');
            $fileName = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('public/images', $fileName);
        }

        Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'foto_layanan' => $fileName,
            'desk_layanan' => $request->desk_layanan,
            'harga_layanan' => $request->harga_layanan,
        ]);

        // Alihkan ke halaman sukses atau kembalikan respons
        return redirect(url('dashboard/layanan'))->with('success', 'Layanan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $layanan = Layanan::find($id);
        return view('admin.layanan.edit', compact('layanan'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_layanan' => 'required|string',
            'foto_layanan' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan aturan validasi untuk gambar
            'desk_layanan' => 'required|string',
            'harga_layanan' => 'required|numeric',
        ]);

        $ubahlayan = Layanan::find($id);
        $fileName = $ubahlayan->foto_layanan;

        if ($request->hasFile('foto_layanan')) {
            $file = $request->file('foto_layanan');
            $fileName = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('public/images', $fileName);
        }

        $ubahlayan->update([
            'nama_layanan' => $request->nama_layanan,
            'foto_layanan' => $fileName,
            'desk_layanan' => $request->desk_layanan,
            'harga_layanan' => $request->harga_layanan,
        ]);

        return redirect()->route('layanan')->with('success', 'Layanan berhasil diperbarui');
    }


    public function destroy($id)
    {
        // Dapatkan path gambar dari model Layanan berdasarkan ID
        $layanan = Layanan::find($id);
        $pathGambar = $layanan->foto_layanan;

        // Hapus gambar dari penyimpanan
        if (Layanan::exists($pathGambar)) {
            Layanan::destroy($pathGambar);
        }

        // Hapus record dari database
        $layanan->delete();

        return redirect(url('dashboard/layanan'))->with('success', 'Data berhasil dihapus.');
    }
}
