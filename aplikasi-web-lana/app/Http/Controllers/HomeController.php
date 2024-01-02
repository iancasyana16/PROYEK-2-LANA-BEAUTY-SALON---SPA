<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    public function index()
    {
        // Tambahkan logika atau tampilan yang sesuai untuk halaman home di sini
        return view('home.index');
    }

    // public function settinguser()
    // {
    //     $user = User::all();
    //     return view('user.index', compact('user'));
    // }
}
