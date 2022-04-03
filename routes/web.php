<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');


Auth::routes();

Route::get('/profile/{id}',[UserController::class,'user'])->name('user')->middleware('auth');
