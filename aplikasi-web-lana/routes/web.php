<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\settingController;

Route::get('/admin/dashboard', function() {
    return view('admin/dashboard.index');
});
Route::get('/dashboard', function() {
    return view('/admin/dashboard.index');
})->name('dashboard');

Route::get('/admin/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/admin/layanan/create', [LayananController::class, 'create'])->name('create');
Route::get('/admin/layanan/store', [LayananController::class, 'store'])->name('read');
Route::get('/admin/layanan/edit', [LayananController::class, 'edit'])->name('update');
Route::get('/admin/layanan/delete', [LayananController::class, 'destroy'])->name('delete');
