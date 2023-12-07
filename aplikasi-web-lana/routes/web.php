<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
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
Route::get('/galeri/kegiatan', function () {
    return view('/galeri.kegiatan');
});
Route::get('/log', function () {
    return view('/user.login');
});
Route::get('/register', function () {
    return view('/user.register');
});
Route::view('/dashboard', 'dashboard.index');

Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'login')->name('login');
});
