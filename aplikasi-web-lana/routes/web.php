<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\LoginRegisterController;

Route::get('/admin/dashboard', function() {
    return view('admin/dashboard.index');
});
<<<<<<< HEAD
Route::get('/login', function () {
    return view('/user.login');
});
Route::get('/register', function () {
    return view('/user.register');
});
Route::get('/edit profil', function () {
    return view('/user.index');
});
Route::get('/login', [loginRegisterController::class,'loginindex'])->name('loginindex');
// Route::get('/login', 'loginController@loginindex')->name('loginindex');
Route::post('/login', [loginRegisterController::class,'loginPost'])->name('loginPost');
Route::get('/register', [loginRegisterController::class,'registerindex'])->name('registerindex');
Route::post('/register', [loginRegisterController::class,'registerPost'])->name('registerPost');
=======

Route::get('/dashboard', function() {
    return view('/admin/dashboard.index');
})->name('dashboard');

Route::get('/admin/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/admin/layanan/create', [LayananController::class, 'create'])->name('create');
Route::get('/admin/layanan/store', [LayananController::class, 'store'])->name('read');
Route::get('/admin/layanan/edit', [LayananController::class, 'edit'])->name('update');
Route::get('/admin/layanan/delete', [LayananController::class, 'destroy'])->name('delete');
>>>>>>> a57b6015c8cfa020615bfc6a401819decbcec97b
