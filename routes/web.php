<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('login', [AuthController::class, 'login_page'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('auth.register');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('user/index', function () {
    return view('user/index');
})->name('index');

Route::get('user/product/index', function () {
    return view('user/product/index');
})->name('product');

Route::get('user/swapping/index', function () {
    return view('user/swapping/index');
})->name('swapping');

Route::get('user/profile/index', function () {
    return view('user/profile/index');
})->name('profile');

Route::get('user/wallet/index', function () {
    return view('user/wallet/index');
})->name('wallet');

Route::get('user/complain/index', function () {
    return view('user/complain/index');
})->name('complain');

Route::get('mail/verifyaccount', function () {
    return view('mail/verifyaccount');
})->name('verifyaccount');

Route::get('mail/forgot-password', function () {
    return view('mail/forgot-password');
})->name('forgot-password');

Route::get('emailtemplates/trade-confirmation', function () {
    return view('emailtemplates/trade-confirmation');
})->name('trade-confirmation');

Route::get('emailtemplates/swap-confirmation', function () {
    return view('emailtemplates/swap-confirmation');
})->name('swap-confirmation');

Route::get('emailtemplates/purchase-confirmation', function () {
    return view('emailtemplates/purchase-confirmation');
})->name('purchase-confirmation');

Route::get('emailtemplates/password-reset', function () {
    return view('emailtemplates/password-reset');
})->name('password-reset');

Route::get('emailtemplates/bid-confirmation', function () {
    return view('emailtemplates/bid-confirmation');
})->name('bid-confirmation');

Route::get('emailtemplates/account-verification', function () {
    return view('emailtemplates/account-verification');
})->name('account-verification');
