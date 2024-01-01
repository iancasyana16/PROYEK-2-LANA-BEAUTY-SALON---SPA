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
        return view('user.login');
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
        return view('booking.index');
    }
    public function setting()
    {
        $salon = Salon::findOrFail(1);

        return view('admin.setting.index', compact('salon'));
    }
}
