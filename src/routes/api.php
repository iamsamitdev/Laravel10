<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route Group api/v1
Route::group(['prefix' => 'v1'], function () {
    // Route get all products
    Route::resource('/products', ProductController::class);
});

// Route get user
// Route::get('/user',function (Request $request) {
//     // retunr user parameter
//     return "Hello User";
// });

// Route::post('/user',function (Request $request) {
//     // retunr user parameter
//     return "Post User";
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
