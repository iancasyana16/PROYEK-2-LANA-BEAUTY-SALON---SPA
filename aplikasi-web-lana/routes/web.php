<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\settingController;

Route::get('/admin/dashboard', function() {
    return view('admin/dashboard.index');
});
