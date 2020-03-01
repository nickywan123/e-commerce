<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('shop')->group(function () {
    Route::get('/get-cart', 'APIControllers\CartController@index');

    Route::prefix('cart')->group(function () {
        Route::delete('/delete/{id}', 'APIControllers\CartController@destroy');
    });
});
