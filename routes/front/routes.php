<?php

use App\Http\Controllers\Frontend\FrontendHomeController;
use App\Http\Controllers\Frontend\FrontendPoductController;
use Illuminate\Support\Facades\Route;

Route::resource('/', FrontendHomeController::class);
Route::get('/product', [FrontendPoductController::class, 'index'])->name('front.product');