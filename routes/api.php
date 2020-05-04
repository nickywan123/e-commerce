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
        Route::get('/', 'APIControllers\CartController@index');
        Route::delete('/delete/{id}', 'APIControllers\CartController@destroy');
    });
});

Route::group(['prefix' => 'auth'], function () {
    Route::group(['middleware' => ['guest:api']], function () {
        Route::post('login', 'API\Auth\AuthController@login');
        Route::post('signup', 'API\Auth\AuthController@signup');

        Route::group(['prefix' => 'customer'], function () {
            Route::post('register', 'API\Auth\AuthController@customerRegister');
        });
    });
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'API\Auth\AuthController@logout');
        Route::get('getuser', 'API\Auth\AuthController@getUser');
    });
});


/**
 * Public Routes
 * TODO: Move to auth:api middleware group.
 */
// Get categories.
Route::get(
    '/categories',
    'API\Shop\CategoryController@getCategories'
);
// Get category with child and products.
Route::get(
    '/category/{categoryId}',
    'API\Shop\CategoryController@getChildCategory'
);

// Get category details with child and products.

Route::get(
    '/category/test/{categoryId}',
    'API\Shop\CategoryController@test'
);
