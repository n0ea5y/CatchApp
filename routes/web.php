<?php

use App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\EndUser\Auth\EndUserAuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AdminAuthenticatedSessionController::class, 'store'])->name('login.store');

    Route::middleware('auth:admin')->group(function() {
        Route::get('dashboard', function () {
            return Inertia::render('Dashboard');
        })->name('dashboard');

        Route::get('shift-management', function () {
            return Inertia::render('Admin/Shift/ShiftManagement');
        })->name('shift.index');

        Route::get('staff-management', function () {
            return Inertia::render('Admin/Staff/StaffManagement');
        })->name('staff.index');

        Route::get('store-management', function () {
            return Inertia::render('Admin/Store/StoreManagement');
        })->name('store.index');

        Route::post('logout', [AdminAuthenticatedSessionController::class, 'destroy'])->name('logout');
    });

});

Route::prefix('enduser')->name('enduser.')->group(function () {
    Route::get('login', [EndUserAuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [EndUserAuthenticatedSessionController::class, 'store'])->name('login.store');

    Route::middleware('auth:enduser')->group(function() {
        Route::get('dashboard', function () {
            return Inertia::render('Dashboard');
        })->name('dashboard');

        Route::post('logout', [EndUserAuthenticatedSessionController::class, 'destroy'])->name('logout');
    });

});

// require __DIR__.'/auth.php';
