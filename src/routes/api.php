<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

// Route for register
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route Group api/v1 with middleware auth:sanctum
Route::group(['prefix' => 'v1','middleware' => 'auth:sanctum'], function () {
    // Route get all products
    Route::resource('/products', ProductController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});