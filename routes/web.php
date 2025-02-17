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
