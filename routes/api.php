<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CartProductController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductOverviewController;
use Illuminate\Support\Facades\Route;

Route::post('register', RegisterController::class);
Route::post('login', LoginController::class);
Route::get('products', [ProductController::class, 'index']);
Route::get('products/overview', ProductOverviewController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(CartController::class)->prefix('cart')->group(function () {
        Route::get('', 'show');
        Route::delete('', 'destroy');

        Route::controller(CartProductController::class)->prefix('product/{product}')->group(function () {
            Route::post('', 'store');
            Route::delete('', 'destroy');
        });
    });

    Route::controller(OrderController::class)->prefix('orders')->group(function () {
        Route::get('', 'index');
        Route::post('', 'store');
        Route::get('{order}', 'show');
    });

    Route::post('logout', LogoutController::class);
});

