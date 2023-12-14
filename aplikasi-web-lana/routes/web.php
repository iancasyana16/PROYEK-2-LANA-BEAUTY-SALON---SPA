<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\settingController;

Route::get('/admin/dashboard', function() {
    return view('admin/dashboard.index');
});
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
