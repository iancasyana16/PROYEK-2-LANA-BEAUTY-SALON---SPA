<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Salon;
use App\Models\Admin;


class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.index');
    }

    public function dashboardLayanan()
    {
        $layanan = Layanan::all();
        return view('admin.layanan.index', compact('layanan'));
    }

    public function dashboardUser()
    {
        return view('admin.user.index');
    }

    public function dashboardBooking()
    {
        return view('admin.booking.index');
    }

    // public function dashboardGallery()
    // {
    //     return view('admin.layanan.index');
    // }

    public function dashboardSetting()
    {
        $salon = Salon::all();
        $admin = Admin::all();
        return view('admin.setting.index', compact('salon', 'admin'));

    }
}
