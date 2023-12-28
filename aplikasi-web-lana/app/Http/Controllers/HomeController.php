<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Tambahkan logika atau tampilan yang sesuai untuk halaman home di sini
        return view('home.index');
    }
}
