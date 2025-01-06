<?php

use App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('admin')->name('admin.')->group(function () {
    //認証していたらダッシュボードへ：していなければlogin画面へ
    Route::get('/', function () {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return Inertia::render('Admin/Auth/Login');
    })->name('index');

    Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AdminAuthenticatedSessionController::class, 'store'])->name('login.store');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', function (Request $request) {
            return Inertia::render('Dashboard');
        })->name('dashboard');

        // シフト画面
        Route::get('shift-management', function () {
            return Inertia::render('Admin/Shift/Index');
        })->name('shift.index');

        // スタッフ画面
        Route::get('staff-management', function () {
            return Inertia::render('Admin/Staff/Index');
        })->name('staff.index');

        // 店舗画面
        Route::get('store-management', [StoreController::class, 'index'])->name('store.index');

        // 店舗追加画面
        Route::get('store-management/create', [StoreController::class, 'create'])->name('store.create');
        Route::post('store-management/create', [StoreController::class, 'store'])->name('store.store');

        // 店舗詳細画面
        Route::get('store-management/show/{storeId}', [StoreController::class, 'show'])->name('store.show');
        Route::post('store-management/show', [StoreController::class, 'salesAmount'])->name('store.show.post');

        Route::post('logout', [AdminAuthenticatedSessionController::class, 'destroy'])->name('logout');
    });
});
