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
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\SubCoordinatorController;

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
        Route::get('/', [CentrallController::class, 'index'])->name('management.central');
        Route::get('/create', [CentrallController::class, 'create'])->name('management.central.create');
        Route::post('/store', [CentrallController::class, 'store'])->name('management.central.store');
        Route::get('/edit/{userid}', [CentrallController::class, 'edit'])->name('management.central.edit');
        Route::post('/update/{userid}', [CentrallController::class, 'update'])->name('management.central.update');
        Route::get('/getCentral', [CentrallController::class, 'getCentral'])->name('management.central.getCentral');
    });

    Route::prefix('parent')->group(function () {
        Route::get('/', [ParentController::class, 'index'])->name('management.parent');
        Route::get('/getParent', [ParentController::class, 'getParent'])->name('management.parent.getParent');
        Route::get('/create', [ParentController::class, 'create'])->name('management.parent.create');
        Route::post('/store', [ParentController::class, 'store'])->name('management.parent.store');
        Route::get('/edit/{userid}', [ParentController::class, 'edit'])->name('management.parent.edit');
        Route::post('/update/{userid}', [ParentController::class, 'update'])->name('management.parent.update');
    });

    Route::prefix('coordinator')->group(function () {
        Route::get('/', [CoordinatorController::class, 'index'])->name('management.coordinator');
        Route::get('/getCoordinator', [CoordinatorController::class, 'getCoordinator'])->name('management.coordinator.getCoordinator');
        Route::get('/create', [CoordinatorController::class, 'create'])->name('management.coordinator.create');
        Route::post('/store', [CoordinatorController::class, 'store'])->name('management.coordinator.store');
        Route::get('/edit/{userid}', [CoordinatorController::class, 'edit'])->name('management.coordinator.edit');
        Route::post('/update/{userid}', [CoordinatorController::class, 'update'])->name('management.coordinator.update');
    });
    
    Route::prefix('subcoordinator')->group(function () {
        Route::get('/', [SubCoordinatorController::class, 'index'])->name('management.subcoordinator');
        Route::get('/getSubCoordinator', [SubCoordinatorController::class, 'getSubCoordinator'])->name('management.subcoordinator.getSubCoordinator');
        Route::get('/create', [SubCoordinatorController::class, 'create'])->name('management.subcoordinator.create');
        Route::post('/store', [SubCoordinatorController::class, 'store'])->name('management.subcoordinator.store');
        Route::get('/edit/{userid}', [SubCoordinatorController::class, 'edit'])->name('management.subcoordinator.edit');
        Route::post('/update/{userid}', [SubCoordinatorController::class, 'update'])->name('management.subcoordinator.update');
    });
    
    Route::prefix('subparent')->group(function () {
        Route::get('/', [SubParentController::class, 'index'])->name('management.subparent');
        Route::get('/getSubParent', [SubParentController::class, 'getSubParent'])->name('management.subparent.getSubParent');
        Route::get('/create', [SubParentController::class, 'create'])->name('management.subparent.create');
        Route::post('/store', [SubParentController::class, 'store'])->name('management.subparent.store');
        Route::get('/edit/{userid}', [SubParentController::class, 'edit'])->name('management.subparent.edit');
        Route::post('/update/{userid}', [SubParentController::class, 'update'])->name('management.subparent.update');
    });

    Route::prefix('member')->group(function () {
        Route::get('/', [MemberController::class, 'index'])->name('management.member');
        Route::get('/getMember', [MemberController::class, 'getMember'])->name('management.member.getMember');
        Route::get('/create', [MemberController::class, 'create'])->name('management.member.create');
        Route::post('/store', [MemberController::class, 'store'])->name('management.member.store');
        Route::get('/edit/{userid}', [MemberController::class, 'edit'])->name('management.member.edit');
        Route::post('/update/{userid}', [MemberController::class, 'update'])->name('management.member.update');
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
