<?php

use App\Http\Controllers\Frontend\FrontendHomeController;
use Illuminate\Support\Facades\Route;

Route::resource('/', FrontendHomeController::class);