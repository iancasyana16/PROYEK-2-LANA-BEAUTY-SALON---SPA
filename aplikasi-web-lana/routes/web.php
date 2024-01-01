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


// Route::get('/home', function() {
//     return view('home.index');
// });
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard.index');
});
Route::get('/login', function () {
    return view('/user.login');
});
Route::get('/register', function () {
    return view('/user.register');
});
Route::get('/editprofil', function () {
    return view('/user.index');
});
Route::get('/login', [loginRegisterController::class, 'loginindex'])->name('loginindex');
// Route::get('/login', 'loginController@loginindex')->name('loginindex');
Route::post('/login', [loginRegisterController::class, 'loginPost'])->name('loginPost');
Route::get('/register', [loginRegisterController::class, 'registerindex'])->name('registerindex');
Route::post('/register', [loginRegisterController::class, 'registerPost'])->name('registerPost');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('/admin/dashboard.index');
})->name('dashboard');

Route::get('/admin/layanan', [LayananController::class, 'index'])->name('layanan');
// Route::get('/admin/layanan/create', [LayananController::class, 'create'])->name('create');
// Route::get('/admin/layanan/store', [LayananController::class, 'store'])->name('read');
// Route::get('/admin/layanan/edit', [LayananController::class, 'edit'])->name('update');
// Route::get('/admin/layanan/delete', [LayananController::class, 'destroy'])->name('delete');
use App\Http\Controllers\PageController;

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
Route::get('/gal/coba', [galeriController::class, 'coba']);
Route::get('/galeri/{kategori}', [galeriController::class, 'showByCategory'])->name('galeri.showByCategory');
Route::post('/galeri/update/{id}', [GaleriController::class, 'update'])->name('galeri.update');
Route::delete('/galeri/destroy/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

Route::get('/profil', function (){
    return view('penjual.setting');
});

Route::get('idiprofile', function (){
    return view('profile.isiprofile');
});

Route::get('setting',function (){
    return view('/penjual.setting');
});
//route login dan regiter
// Route::get('/login', [loginRegisterController::class, 'loginindex'])->name('loginindex');
// Route::get('/login', 'loginController@loginindex')->name('loginindex');
// Route::post('/login', [loginRegisterController::class, 'loginPost'])->name('loginPost');
// Route::get('/register', [loginRegisterController::class, 'registerindex'])->name('registerindex');
// Route::post('/register', [loginRegisterController::class, 'registerPost'])->name('registerPost');

Route::get('/registerAdmin', [loginAdminController::class, 'registerAdminIndex'])->name('registerAdminIndex');
Route::post('/registerAdmin', [loginAdminController::class, 'registerAdminPost'])->name('registerAdminPost');
Route::get('/loginAdmin', [loginAdminController::class, 'loginAdminIndex'])->name('loginAdminIndex');
Route::post('/loginAdmin', [loginAdminController::class, 'loginAdminPost'])->name('loginAdminPost');
Route::get('/logout', [loginAdminController::class, 'logout'])->name('logout');
