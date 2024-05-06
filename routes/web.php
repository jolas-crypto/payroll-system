<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Payroll\PayrollController;
use App\Http\Controllers\Premiums\PremiumController;
use App\Http\Controllers\Premiums\SSSPremiumController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function  () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'authenticate'])->name('login-submit');
    Route::resource('register', RegisterController::class);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('dashboard', DashboardController::class);
    Route::resource('payroll-dashboard', PayrollController::class);
    Route::resource('premium', PremiumController::class);

    Route::post('/premium-sss/list', [PremiumController::class, 'list'])->name('premium-sss-list');
    Route::resource('sss-premiums', SSSPremiumController::class);
});
