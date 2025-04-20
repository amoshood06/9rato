<?php

use App\Http\Controllers\Auth\ForgottenPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VendorRegisterController;
use App\Http\Controllers\Auth\VerifyOTPController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::group(['middleware' => 'guest'], function(){
    Route::get('login', [AuthController::class, 'login_page'])->name('login');
    Route::get('register', [AuthController::class, 'register_page'])->name('auth.register');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('verify-account', [AuthController::class, 'verify_account'])->name('auth.verify');

    Route::group(['middleware' => 'isVerified'], function(){
        Route::get('/user-dashboard', [ProfileController::class, 'dashboard'])->name('user.dashboard');
        Route::get('profile/settings', [ProfileController::class, 'view_profile'])->name('profile.index');
        Route::get('profile/edit', [ProfileController::class, 'edit_profile'])->name('profile.edit');
        Route::get('/wallet', [WalletController::class, 'index'])->name('user.wallet');
    });
});


Route::get('user/product/index', function () {
    return view('user/product/index');
})->name('product');

Route::get('user/swapping/index', function () {
    return view('user/swapping/index');
})->name('swapping');


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


// Endpoints
// Auth
Route::group(['prefix' => 'auth', 'middleware' => 'gues'], function () {

    Route::post('/register', RegisterController::class);
    Route::post('/login', LoginController::class);
    Route::post('/forgotten-password', ForgottenPasswordController::class);
    Route::post('/verify-otp', VerifyOTPController::class);
    Route::post('/reset-password', ResetPasswordController::class);
    Route::post('/vendor', VendorRegisterController::class);
});
