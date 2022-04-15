<?php

use App\Http\Controllers\ArticlController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'allData'])->name('allData');

Route::get('/articles', [ArticlController::class,'allData'])->name('getAllArticle');

Route::get('/articles/themes/{theme_id}', [ArticlController::class,'getArticleTheme'])->name('getArticleTheme');

Route::get('/articles/{id}', [ArticlController::class,'getArticle'])->name('getArticle');


Auth::routes();

Route::get('/profile/{id}',[UserController::class,'user'])->name('user')->middleware('auth');
