<?php

use App\Http\Controllers\user\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\LoginController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;



Route::group(['prefix' => 'user'], function () {

    //Guest middleware
    Route::group(['middleware' => 'guest'], function () {

        Route::get('login', [LoginController::class, 'index'])->name('user.login');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('user.authenticate');

        Route::get('register', [LoginController::class, 'register'])->name('user.register');
        Route::post('processregister', [LoginController::class, 'processregister'])->name('user.processregister');
    });
    //Authenticated middleware
    Route::group(['middleware' => 'auth'], function () {

        Route::get('logout', [LoginController::class, 'logout'])->name('user.logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    });

});


Route::group(['prefix' => 'admin'], function () {

    //Guest middleware
    Route::group(['middleware' => 'admin.guest'], function () {

        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');

    });
    //Authenticated middleware
    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    });

});

