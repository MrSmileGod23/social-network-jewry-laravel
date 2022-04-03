<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'allData']);


Auth::routes();

Route::get('/profile/{id}',[UserController::class,'user'])->name('user')->middleware('auth');
