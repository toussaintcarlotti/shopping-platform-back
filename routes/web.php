<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:web')->group(function () {
    Route::view('/', 'dashboard')->name('dashboard');

    Route::view('profile', 'profile.edit')->name('profile.edit');
});
