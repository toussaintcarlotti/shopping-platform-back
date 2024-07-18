<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CartProductController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::post('login', LoginController::class);
Route::get('products', [ProductController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(CartController::class)->prefix('cart')->group(function () {
        Route::get('', 'index');
        Route::delete('delete', 'destroy');

        Route::controller(CartProductController::class)->prefix('product')->group(function () {
            Route::post('', 'store');
            Route::delete('{product}', 'destroy');
        });
    });

    Route::controller(OrderController::class)->prefix('orders')->group(function () {
        Route::get('', 'index');
        Route::post('', 'store');
        Route::get('{order}', 'show');
    });

    Route::post('logout', LogoutController::class);
});

