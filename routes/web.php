<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/joker-group', function () {
    return view('joker-group');
})->name('joker-group');

Route::get('/about', function () {
    return view('about');
})->name('about');
