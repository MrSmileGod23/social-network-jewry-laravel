<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::get('/hikes', [HikeController::class,'index'])->name('hikes.index');
Route::get('/hikes/show/{id}', [HikeController::class,'show'])->name('hikes.show');

Route::get('/articles', [ArticleController::class,'index'])->name('articles.index');
Route::get('/articles/themes/{theme_id}', [ArticleController::class,'showThemes'])->name('articles.showThemes');
Route::get('/articles/show/{id}', [ArticleController::class,'show'])->name('articles.show');


Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/user/{id}',[UserController::class,'show'])->name('user.show');
    Route::get('/user/{id}/editing',[UserController::class,'edit'])->name('user.edit');
    Route::post('/user/{id}',[UserController::class,'update'])->name('user.update');

    Route::get('/hikes/create/',[HikeController::class,'new'])->name('hikes.new');
    Route::post('/hikes/create/',[HikeController::class,'create'])->name('hikes.create');

    Route::get('/articles/create/',[ArticleController::class,'new'])->name('articles.new');
    Route::post('/articles/create/',[ArticleController::class,'create'])->name('articles.create');
});

