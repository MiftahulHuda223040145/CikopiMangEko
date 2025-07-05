<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/ecommerce', function () {
    return view('ecommerce');
});

Route::get('/news', function () {
    return view('news');
});
