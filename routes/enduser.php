<?php

use App\Http\Controllers\EndUser\Auth\EndUserAuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('enduser')->name('enduser.')->group(function () {
    //認証していたらダッシュボードへ：していなければlogin画面へ
    Route::get('/', function () {
        if (Auth::guard('enduser')->check()) {
            return redirect()->route('enduser.dashboard');
        }
        return Inertia::render('EndUser/Auth/Login');
    })->name('index');
    Route::get('login', [EndUserAuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [EndUserAuthenticatedSessionController::class, 'store'])->name('login.store');


    Route::middleware('auth:enduser')->group(function () {
        Route::get('dashboard', function () {
            return Inertia::render('Dashboard');
        })->name('dashboard');

        Route::get('shift', function () {
            return Inertia::render('EndUser/Shift/Index');
        })->name('shift.index');

        Route::get('payment', function () {
            return Inertia::render('EndUser/Payment/Index');
        })->name('pay.index');

        Route::post('logout', [EndUserAuthenticatedSessionController::class, 'destroy'])->name('logout');
    });
});
