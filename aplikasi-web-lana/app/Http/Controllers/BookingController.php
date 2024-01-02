<?php

// File: app\Http\Controllers\BookingController.php

namespace App\Http\Controllers;

use App\Models\Booking;
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
            'id_user' => 'required|exists:users,id',
            'id_layanan' => 'required|exists:layanans,id',
            'tanggal_booking' => 'required|date',
            'waktu_booking' => 'required|date_format:H:i',
            'status_booking' => 'required|string',
            'informasi_tambahan' => 'nullable|string',
        ]);

        // Simpan data booking ke dalam database
        $booking = Booking::create($validatedData);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('booking.index')->with('success', 'Booking berhasil dibuat.');
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

