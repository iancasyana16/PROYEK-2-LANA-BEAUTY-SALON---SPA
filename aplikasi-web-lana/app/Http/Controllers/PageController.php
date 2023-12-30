<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

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
        return view('gallery.index');
    }

    public function booking()
    {
        return view('booking.index');
    }
}
