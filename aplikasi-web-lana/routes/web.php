<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginAdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserProfilController;
use App\Models\User;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SalonController;

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/login', function () {
    return view('/user.login');
});
Route::get('/register', function () {
    return view('/user.register');
});

Route::get('/userprofil', [UserProfilController::class, 'home'])->name('user.home');
// Route::get('/userprofil/setting', [UserProfilController::class, 'setting']);
// Route::get('userprofil/logout', [UserProfilController::class, 'logout']);
// Route::get('/editprofil/{id}', [UserProfilController::class, 'settinguser'])->name('user.home');
// Route::get('/settinguser/profil/edit', [LoginRegisterController::class, 'edit'])->name('settinguser.edit');
// Route::put('/settinguser/profil/update', [LoginRegisterController::class, 'update'])->name('settinguser.update');
Route::get('/settinguser/profil/edit/{id}', [LoginRegisterController::class, 'edit'])->name('settinguser.edit');
Route::put('/settinguser/profil/update/{id}', [LoginRegisterController::class, 'update'])->name('settinguser.update');


Route::get('/login', [loginRegisterController::class, 'loginindex'])->name('loginindex');
Route::post('/login', [loginRegisterController::class, 'loginPost'])->name('loginPost');
Route::get('/register', [loginRegisterController::class, 'registerindex'])->name('registerindex');
Route::post('/register', [loginRegisterController::class, 'registerPost'])->name('registerPost');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');

Route::get('/admin/layanan', [LayananController::class, 'index'])->name('layanan');
// Route::get('/admin/layanan/create', [LayananController::class, 'create'])->name('create');
// Route::get('/admin/layanan/store', [LayananController::class, 'store'])->name('read');
// Route::get('/admin/layanan/edit', [LayananController::class, 'edit'])->name('update');
// Route::get('/admin/layanan/delete', [LayananController::class, 'destroy'])->name('delete');

//route controller page user
Route::get('/', [PageController::class, 'home'])->name('homepage');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/booking', [PageController::class, 'booking'])->name('booking');

//route controller page admin dashboaard
Route::get('/dashboard/home', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/user', [DashboardController::class, 'dashboardUser'])->name('user');
Route::get('/dashboard/layanan', [DashboardController::class, 'dashboardLayanan'])->name('layanan');
Route::get('/dashboard/booking', [DashboardController::class, 'dashboardBooking'])->name('booking');
// Route::get('/dashboard/gallery', [DashboardController::class, 'dashboardGallery'])->name('gallery');
Route::get('/dashboard/setting', [DashboardController::class, 'dashboardSetting'])->name('setting');

//route controller admin layanan
Route::post('/layanan/store', [LayananController::class, 'store'])->name('create');
// Route::get('/layanan/edit', [LayananController::class, 'edit'])->name('edit');
Route::get('/admin/layanan/edit/{id}', [LayananController::class, 'edit'])->name('edit');
Route::post('/admin/layanan/update/{id}', [LayananController::class, 'update'])->name('admin.layanan.update');
Route::get('/layanan/delete/{id}', [LayananController::class, 'destroy'])->name('delete');

//route gallery
Route::resource('galeri', galeriController::class);
Route::get('/dashboard/gallery', [galeriController::class, 'index'])->name('Galeri.index');
Route::get('/gal/coba', [galeriController::class, 'coba'])->name('gal.coba');
Route::get('/galeri/{kategori}', [galeriController::class, 'showByCategory'])->name('galeri.showByCategory');
Route::post('/galeri/update/{id}', [GaleriController::class, 'update'])->name('galeri.update');
Route::delete('/galeri/destroy/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

Route::get('/profil', function () {
    return view('penjual.setting');
});

Route::get('idiprofile', function () {
    return view('profile.isiprofile');
});

Route::get('/admin/setting', [SalonController::class, 'index'])->name('admin.setting');
Route::get('/admin/setting/edit/{id}', [SalonController::class, 'edit'])->name('admin.setting.edit');
Route::put('/admin/setting/update', [SalonController::class, 'update'])->name('admin.setting.update');

Route::get('/admin/setting/profil/edit/{id}', [loginAdminController::class, 'edit'])->name('admin.settingprofil.edit');
Route::put('/admin/setting/profil/update', [loginAdminController::class, 'update'])->name('admin.settingprofil.update');


Route::get('/registerAdmin', [loginAdminController::class, 'registerAdminIndex'])->name('registerAdminIndex');
Route::post('/registerAdmin', [loginAdminController::class, 'registerAdminPost'])->name('registerAdminPost');
Route::get('/loginAdmin', [loginAdminController::class, 'loginAdminIndex'])->name('loginAdminIndex');
Route::post('/loginAdmin', [loginAdminController::class, 'loginAdminPost'])->name('loginAdminPost');
Route::get('/logout', [loginAdminController::class, 'logout'])->name('logout');

// Booking route
// Route::post('reservations', [BookingController::class, 'index'])->name('booking.index');
Route::post('reservations', [BookingController::class, 'store'])->name('booking.store');
Route::get('/reservations/{id}/edit', [BookingController::class, 'edit'])->name('booking.edit');
Route::put('/reservations/{id}', [BookingController::class, 'update'])->name('booking.update');
Route::delete('/reservations/{id}', [BookingController::class, 'destroy'])->name('booking.destroy');
// routes/web.php
// Route::get('/invoice', [BookingController::class, 'showInvoice'])->name('invoice.show');
Route::get('/invoice/{id}', [BookingController::class, 'showInvoice'])->name('invoice.show');
// Route::get('/invoice/{id}', [BookingController::class, 'showInvoice'])->name('invoice.show');

Route::get('/booking/{id}/update-status/{newStatus}', [BookingController::class, 'updateStatus'])
    ->name('booking.updateStatus');
