<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Salon;


class HomeController extends Controller
{
    public function index()
    {
        // Tambahkan logika atau tampilan yang sesuai untuk halaman home di sini
        $salon = Salon::all();
        return view('home.index', compact('salon'));
    }

    // public function settinguser()
    // {
    //     $user = User::all();
    //     return view('user.index', compact('user'));
    // }
}
