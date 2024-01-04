<?php

// File: app\Http\Controllers\BookingController.php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
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
        // return redirect()->route('booking.index', ['id' => $booking->id])->with([
        //     'success' => 'Booking berhasil dibuat.',
        //     'booking' => $booking,
        // ]);
        return redirect()->route('invoice.show', ['id' => $booking->id])->with([
            'success' => 'Booking berhasil dibuat.',
            'booking' => $booking,
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

    // public function showInvoice($id)
    // {
    //     $idUser = auth()->user();

    //     // Mencari data booking berdasarkan ID
    //     $booking = Booking::find($id);

    //     // Periksa apakah data ditemukan
    //     if ($booking) {
    //         // Lakukan operasi lanjutan jika data ditemukan
    //         return view('booking.invoice', compact('booking'));
    //     } else {
    //         // Handle jika data tidak ditemukan
    //         abort(404); // atau redirect ke halaman lain, sesuai kebutuhan
    //     }
    // }
    public function showInvoice($id)
    {
        $idUser = auth()->user();

        // Retrieve booking data with the 'layanan' relationship
        try {
            $booking = Booking::with('layanan')->find($id);

            // Periksa apakah data ditemukan
            if ($booking) {
                // Lakukan operasi lanjutan jika data ditemukan
                return view('booking.invoice', compact('booking'));
            } else {
                // Handle jika data tidak ditemukan
                abort(404); // atau redirect ke halaman lain, sesuai kebutuhan
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle if data is not found
            abort(404);
        }
    }

    // public function showInvoice($id)
    // {
    //     $idUser = auth()->user();
    //     // $idUser = $id;
    //     // Mendapatkan data booking untuk ditampilkan di invoice
        // $booking = Booking::where('id_user', $idUser->id_user)
        //     ->leftJoin('layanans', 'layanans.id', '=', 'bookings.id_layanan')
        //     ->findOrFail($id);

    //     dd($booking);

    //     return view('booking.invoice', compact('booking'));
    // }
    public function updateStatus($id, $newStatus)
{
    try {
        $booking = Booking::findOrFail($id);

        // Validasi apakah status baru termasuk dalam nilai yang diperbolehkan
        $allowedStatuses = ['diterima', 'ditolak', 'diproses'];

        if (!in_array($newStatus, $allowedStatuses)) {
            return response()->json(['error' => 'Status tidak valid.'], 400);
        }

        $booking->status = $newStatus;
        $booking->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return redirect()->back()->with('error', 'Booking tidak ditemukan.');
    }
}

}
