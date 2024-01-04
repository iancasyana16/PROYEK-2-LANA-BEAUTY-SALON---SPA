<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Sertifikat;
use App\Models\Salon;

class PageController extends Controller
{
    public function home()
    // public function index()
    {
        // Tambahkan logika atau tampilan yang sesuai untuk halaman home di sini
        $salon = Salon::all();
        return view('home.index', compact('salon'));
    }

    public function layanan()
    {
        $layanan = Layanan::all();
        return view('layanan.index', compact('layanan'));
    }

    public function gallery()
    {
        $sertif = Sertifikat::all();
        $salon = Salon::all();
        return view('gal.coba', compact('sertif', 'salon'));
    }

    public function booking()
    {
        $layanan = Layanan::all();
        return view('booking.index', compact('layanan'));
    }
    public function setting()
    {
        $salon = Salon::all();
        return view('admin.setting.index', compact('salon'));
    }
}
