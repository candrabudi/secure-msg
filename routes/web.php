<?php

use Illuminate\Support\Facades\Route;
use Mews\Captcha\CaptchaController as Captcha;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CentrallController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('captcha/{config?}', [Captcha::class, 'getCaptcha']);
Route::post('validate-captcha', [CaptchaController::class, 'validateCaptcha'])->name('validate.captcha');
Route::post('/login/process', [AuthController::class, 'login'])->name('login.process');

Auth::routes();
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::prefix('management')->group(function () {
    Route::prefix('central')->group(function () {
        Route::get('/', [CentrallController::class, 'index'])->name('managmenet.central');
        Route::get('/create', [CentrallController::class, 'create'])->name('managmenet.central.create');
        Route::get('/getCentral', [CentrallController::class, 'getCentral'])->name('managmenet.central.getCentral');
    });
});
