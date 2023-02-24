<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('authv2.index');
});

Route::group(['middleware' => ['guest']], function () {
    /**
     * Register Routes
     */
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register/perform', [RegisterController::class, 'register'])->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/soon', [HomeController::class, 'index'])->name('soon');

    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

    Route::get('/debug', function () {
        return Session::get('Debug');
    })->name('debug');

    Route::prefix('home')->group(function () {
    });
});
