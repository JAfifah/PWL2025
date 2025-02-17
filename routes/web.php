<?php

use Illuminate\Support\Facades\Route;

Route::get('/artikels/{artikel}', function ($artikel) {
    return 'anda berada pada halaman ke-' .$artikel;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya ' .$name;
});

Route::get('/user/{name?}', function ($name='Afifah') {
    return 'Nama saya ' .$name;
});
