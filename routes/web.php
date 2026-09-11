<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/restaurants', function () {
    return view('restaurant');
})->name('restaurants');

Route::get('/deals', function () {
    return view('deals');
})->name('deals');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/track', function () {
    return view('track');
})->name('track');
