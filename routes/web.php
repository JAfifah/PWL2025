<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route untuk beranda
Route::get('/', [PageController::class, 'index']);

// Route untuk halaman /about
Route::get('/about', [PageController::class, 'about']);

// Route untuk halaman artikel dinamis
Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route untuk post dan comment
Route::get('/posts/{post}/comments/{comment}', [PageController::class, 'postComments']);


use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
