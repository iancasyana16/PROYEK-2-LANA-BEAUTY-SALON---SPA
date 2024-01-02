<?php

// File: app\Http\Controllers\BookingController.php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Layanan;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'layanan'])->get();

        return view('booking.index', compact('bookings'));
    }

    public function create()
    {
        // Logika untuk menampilkan formulir pembuatan booking
    }

    public function store(Request $request)
    {
        // Validasi input, sesuaikan dengan kebutuhan aplikasi Anda
        $validatedData = $request->validate([
            'jenis_layanan' => 'required|exists:layanans,id',
            'tanggal_booking' => 'required|date',
            'waktu_booking' => 'required',
            'informasi_tambahan' => 'nullable|string',
        ]);


        // Menentukan id_layanan berdasarkan jenis_layanan yang dipilih
        // $layanan = Layanan::findOrFail($validatedData['jenis_layanan']);
        $layanan = Layanan::findOrFail($request->jenis_layanan);
        $id_layanan = $layanan->id;
        $id_user = auth()->user()->id;

        // Menambahkan id_layanan ke dalam data yang akan disimpan
        // $validatedData['id_layanan'] = $id_layanan;

        // Menghapus jenis_layanan dari data yang akan disimpan
        // unset($validatedData['jenis_layanan']);

        // Simpan data booking ke dalam database
        $booking = Booking::create([
            'id_user' => $id_user,
            'id_layanan' => $request->jenis_layanan,
            'tanggal_booking' => $request->tanggal_booking,
            'waktu_booking' => $request->waktu_booking,
            'informasi_tambahan' => $request->informasi_tambahan,
        ]);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect('/invoice')->with([
            'success'=> 'Booking berhasil dibuat.',
            'data_booking'=> $booking,
        ]);
    }

    public function edit($id)
    {
        // Logika untuk menampilkan formulir pengeditan booking
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data booking
    }

    public function destroy($id)
    {
        // Logika untuk menghapus booking
    }
}
