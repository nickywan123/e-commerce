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

Route::group(['prefix' => 'categories'], function () {

    // Return all categories.
    Route::get('/', 'API\Shop\CategoryController@getCategories');

    // Return a category based on it's ID.
    Route::get('/{id}', 'API\Shop\CategoryController@getCategory');

    // Return the child of a category based on it's ID.
    Route::get('/{id}/childs', 'API\Shop\CategoryController@getCategoryWithChilds');
});

Route::group(['prefix' => 'products'], function () {
    // Return all products.
    Route::get('/', 'API\Shop\ProductController@getProducts');

    // Return a category based on it's ID.
    Route::get('/{id}', 'API\Shop\ProductController@getProduct');
});
