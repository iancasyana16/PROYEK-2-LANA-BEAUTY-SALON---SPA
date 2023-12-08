<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('/home.index');
});
Route::get('/admin', function () {
    return view('/admin.index');
});
Route::get('/galeri', function () {
    return view('/galeri.index');
});
Route::get('/galeri/sertif', function () {
    return view('/galeri.sertif');
});
Route::get('/galeri/sertif2', function () {
    return view('/galeri.sertif2');
});
Route::get('/galeri/kegiatan', function () {
    return view('/galeri.kegiatan');
});
Route::get('/login', function () {
    return view('/user.login');
});
Route::get('/register', function () {
    return view('/user.register');
});
Route::get('/booking', function () {
    return view('/booking.index');
});
Route::get('/order', function () {
    return view('/admin.order');
});
Route::get('/services', function () {
    return view('/admin.services');
});
