<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('wedding');
});

Route::get('/tram-anh', function () {
    return view('weddingABC');
});

