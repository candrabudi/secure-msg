<?php

use Illuminate\Support\Facades\Route;
use Mews\Captcha\CaptchaController as Captcha;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CentrallController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\SubParentController;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('captcha/{config?}', [Captcha::class, 'getCaptcha']);
Route::post('validate-captcha', [CaptchaController::class, 'validateCaptcha'])->name('validate.captcha');
Route::post('/login/process', [AuthController::class, 'login'])->name('login.process');

Auth::routes();
Route::post('/update-location', [LocationController::class, 'update']);
Route::get('/users', [DashboardController::class, 'getUserLocation']);
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
    Route::prefix('parent')->group(function () {
        Route::get('/', [ParentController::class, 'index'])->name('managmenet.parent');
        Route::get('/getParent', [ParentController::class, 'getParent'])->name('managmenet.parent.getParent');
        Route::get('/create', [ParentController::class, 'create'])->name('managmenet.parent.create');
        Route::post('/store', [ParentController::class, 'store'])->name('managmenet.parent.store');
        Route::get('/edit/{userid}', [ParentController::class, 'edit'])->name('managmenet.parent.edit');
        Route::post('/update/{userid}', [ParentController::class, 'update'])->name('managmenet.parent.update');
    });
    Route::prefix('subparent')->group(function () {
        Route::get('/', [SubParentController::class, 'index'])->name('managmenet.subparent');
        Route::get('/getSubParent', [SubParentController::class, 'getSubParent'])->name('managmenet.subparent.getSubParent');
        Route::get('/create', [SubParentController::class, 'create'])->name('managmenet.subparent.create');
        Route::post('/store', [SubParentController::class, 'store'])->name('managmenet.subparent.store');
        Route::get('/edit/{userid}', [SubParentController::class, 'edit'])->name('managmenet.subparent.edit');
        Route::post('/update/{userid}', [SubParentController::class, 'update'])->name('managmenet.subparent.update');
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
