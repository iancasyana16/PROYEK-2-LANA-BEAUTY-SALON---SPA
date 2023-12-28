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

    public function update(Request $request, Layanan $layanan)
    {
        $layanan->update($request->all());
        return redirect()->route('admin/layanan.index')->with('success', 'Layanan berhasil diperbarui');
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
