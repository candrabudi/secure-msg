<?php

use Illuminate\Support\Facades\Route;
use Mews\Captcha\CaptchaController as Captcha;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CentrallController;
use App\Http\Controllers\UserTypeController;

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
        Route::post('/store', [CentrallController::class, 'store'])->name('managmenet.central.store');
        Route::get('/edit/{userid}', [CentrallController::class, 'edit'])->name('managmenet.central.edit');
        Route::post('/update/{userid}', [CentrallController::class, 'update'])->name('managmenet.central.update');
        Route::get('/getCentral', [CentrallController::class, 'getCentral'])->name('managmenet.central.getCentral');
    });
});

Route::prefix('master-data')->group(function () {
    Route::prefix('tipe-user')->group(function () {
        Route::get('/', [UserTypeController::class, 'index'])->name('masterdata.typeuser.index');
        Route::get('/getTypeUser', [UserTypeController::class, 'getTypeUser'])->name('masterdata.typeuser.getTypeUser');
        Route::get('/create', [UserTypeController::class, 'create'])->name('masterdata.typeuser.create');
        Route::get('/edit/{usertypeid}', [UserTypeController::class, 'edit'])->name('masterdata.typeuser.edit');
        Route::post('/store', [UserTypeController::class, 'store'])->name('masterdata.typeuser.store');
        Route::post('/update/{usertypeid}', [UserTypeController::class, 'update'])->name('masterdata.typeuser.update');
    });
});
