<?php

use App\Http\Controllers\ArticlController;
use App\Http\Controllers\HikesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'allData'])->name('allData');

Route::get('/hikes', [HikesController::class,'allHikes'])->name('allHikes');

Route::get('/hikes/show/{id}', [HikesController::class,'getHike'])->name('getHike');

Route::get('/articles', [ArticlController::class,'allData'])->name('getAllArticle');

Route::get('/articles/themes/{theme_id}', [ArticlController::class,'getArticleTheme'])->name('getArticleTheme');

Route::get('/articles/show/{id}', [ArticlController::class,'getArticle'])->name('getArticle');


Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/profile/{id}',[UserController::class,'user'])->name('user');

    Route::get('/profile/{id}/editing',[UserController::class,'editing'])->name('editing');

    Route::post('/profile/{id}',[UserController::class,'updateUser'])->name('updateUser');

    Route::get('/hikes/create/',[HikesController::class,'createHike'])->name('createHike');
    Route::post('/hikes/create/',[HikesController::class,'newHike'])->name('newHike');

    Route::get('/articles/create/',[ArticlController::class,'createArticle'])->name('createArticle');
    Route::post('/articles/create/',[ArticlController::class,'newArticle'])->name('createArticle');
});

