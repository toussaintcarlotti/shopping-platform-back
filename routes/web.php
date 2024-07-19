<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:web')->group(function () {
    Route::view('/', 'dashboard')->name('dashboard');

    Route::view('profile', 'profile.edit')->name('profile.edit');

    Route::get('clients', ClientController::class)->name('clients.index');
    Route::get('produits', ProductController::class)->name('products.index');

    Route::controller(OrderController::class)->name('orders.')->prefix('commandes')->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('{order}', 'show')->name('show');
    });
});
