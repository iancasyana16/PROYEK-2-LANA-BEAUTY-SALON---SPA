<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Salon;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Sertifikat;
use App\Models\User;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $layanan = Layanan::all();
        $user = User::all();
        $booking = Booking::all();
        $gallery = Sertifikat::all();
        return view('admin.dashboard.index', compact('layanan', 'user', 'booking', 'gallery'));
    }

    public function dashboardLayanan()
    {
        $layanan = Layanan::all();
        return view('admin.layanan.index', compact('layanan'));
    }

    public function dashboardUser()
    {
        $booking = Booking::all();
        $user = User::all();
        $admin = Admin::all();
        // return view('admin.user.index');
        return view('admin.user.index', compact('booking', 'user', 'admin'));
    }

    public function dashboardBooking()
    {
        $booking = Booking::with('user')->get();
        // $user = User::all();
        // $admin = Admin::all();
        return view('admin.booking.index', compact('booking'));
    }

    // public function dashboardGallery()
    // {
    //     $sa
    //     return view('admin.layanan.index', compact('galeri'));
    // }

    public function dashboardSetting()
    {
        $salon = Salon::all();
        $admin = Admin::all();
        return view('admin.setting.index', compact('salon', 'admin'));
    }
}
