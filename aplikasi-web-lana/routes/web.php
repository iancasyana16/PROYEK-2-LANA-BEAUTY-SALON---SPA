<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\galeriController;

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

Route::get('/dashboard', function() {
    return view('/admin/dashboard.index');
})->name('dashboard');

Route::get('/admin/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/admin/layanan/create', [LayananController::class, 'create'])->name('create');
Route::get('/admin/layanan/store', [LayananController::class, 'store'])->name('read');
Route::get('/admin/layanan/edit', [LayananController::class, 'edit'])->name('update');
Route::get('/admin/layanan/delete', [LayananController::class, 'destroy'])->name('delete');


Route::resource('galeri', galeriController::class);
Route::get('/galeri', [galeriController::class,'index'])->name('Galeri.index');
Route::get('/gal/coba', [galeriController::class, 'coba']);
Route::get('/galeri/{kategori}', [galeriController::class, 'showByCategory'])->name('galeri.showByCategory');
