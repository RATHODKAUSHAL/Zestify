<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\LoginController;

Route::get('/account/login',[LoginController::class,'index'])->name('account.login');
Route::post('/account/authenticate',[LoginController::class,'authenticate'])->name('account.authenticate');
