<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Sertifikat;
use App\Models\Salon;

class PageController extends Controller
{
    public function home()
    {
        $salon = Salon::all();
        return view('user.login', compact('salon'));
    }

    public function layanan()
    {
        $layanan = Layanan::all();
        return view('layanan.index', compact('layanan'));
    }

    public function gallery()
    {
        $sertif = Sertifikat::all();
        return view('gal.coba', compact('sertif'));
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
