<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\settingController;

// Route::get('/register', [LoginRegisterController::class, 'registerIndex'])->name('registerIndex');
// Route::post('/register', [LoginRegisterController::class, 'registerPost'])->name('registerPost');
// Route::get('/loginUser', [LoginRegisterController::class, 'loginIndex'])->name('loginIndex');
// Route::get('/loginAdmin', [RegisterController::class, 'loginAdminIndex'])->name('loginAdminIndex');
// Route::post('/loginUser', [LoginRegisterController::class, 'loginPost'])->name('loginPost');
// Route::post('/loginAdmin', [RegisterController::class, 'loginAdminPost'])->name('loginAdminPost');
// Route::get('password/edit', [ChangePasswordController::class, 'edit'])->name('password.edit');
// Route::put('password/edit', [ChangePasswordController::class, 'update'])->name('password.update');
// Route::get('/home', [HomeController::class, 'HomeIndex'])->name('HomeIndex');
// Route::get('/home', function () {
//     return view('/homepage.index');
// });
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
<<<<<<< HEAD
Route::view('/dashboard', 'dashboard.index');

// Route::controller(AuthController::class)->group(function(){
// });
//     Route::get('login', 'login')->name('login');
=======
>>>>>>> 5d9562d74b9a52707d9696d306735f0b43f0f06e
Route::get('/booking', function () {
    return view('/booking.index');
});
Route::get('/order', function () {
    return view('/admin.order');
});
<<<<<<< HEAD
Route::get('/galeri/coba', function(){
    return view('/galeri.coba');
=======
Route::get('/services', function () {
    return view('/admin.services');
>>>>>>> 5d9562d74b9a52707d9696d306735f0b43f0f06e
});






// Route::controller(LoginRegisterController::class)->group(function() {
//     Route::get('/register', 'register')->name('register');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/login', 'login')->name('login');
//     Route::post('/authenticate', 'authenticate')->name('authenticate');
//     Route::get('/homepage', 'dashboard')->name('homepage.index');
// Route::middleware('auth')->get('/dashboard', 'LoginRegisterController@dashboard')->name('dashboard');
//     Route::post('/logout', 'logout')->name('logout');
// });
// Route::middleware('auth')->get('/dashboard', 'LoginRegisterController@dashboard')->name('dashboard');

// use App\Http\Controllers\Auth\LoginRegisterController;

// Route::group(function () {
//     Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
//     Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');

//     Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
//     Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');

//     Route::middleware('auth')->group(function () {
//         Route::get('/homepage', [LoginRegisterController::class, 'dashboard'])->name('homepage.index');
//         Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
//         Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
//     });
// });
// web.php

// Route::middleware(['auth'])->group(function () {
//     Route::get('/homepage', [LoginRegisterController::class, 'dashboard'])->name('homepage.index');
//     Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
//     Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
// });

// use App\Http\Controllers\Auth\LoginRegisterController;

// Route::group(function () {
//     Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
//     Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');

//     Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
//     Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');

    // Route untuk dashboard (beranda) yang hanya dapat diakses oleh pengguna yang telah terautentikasi
//     Route::middleware('auth')->group(function () {
//         Route::get('/homepage', [LoginRegisterController::class, 'dashboard'])->name('homepage.index');
//         Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
//         Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
//     });
// });

// Route::controller(LoginRegisterController::class)->group(function() {
//     Route::get('/register', 'register')->name('register');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/login', 'login')->name('login');
//     Route::post('/authenticate', 'authenticate')->name('authenticate');
//     Route::get('/dashboard', 'dashboard')->name('dashboard');
//     Route::post('/logout', 'logout')->name('logout');
// });


