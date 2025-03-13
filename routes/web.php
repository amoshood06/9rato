<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('user/index', function () {
    return view('user/index');
})->name('index');

Route::get('user/product/index', function () {
    return view('user/product/index');
})->name('product');

