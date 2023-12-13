<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/login', function () {
    return view('/login.login');
});
Route::get('/register', function () {
    return view('/login.register');
});
Route::get('/', function () {
    return view('/home.index');
});


Route::get('/booking', function () {
    return view('/booking.index');
});
Route::get('/layanan', function () {
    return view('/layanan.index');
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard.index');
});
Route::get('/admin/user', function () {
    return view('/admin/user.index');
});
Route::get('/admin/booking', function () {
    return view('/admin/booking.index');
});
Route::get('/admin/layanan', function () {
    return view('/admin/layanan.index');
});
