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

Route::group(['prefix' => 'auth'], function () {
    Route::group(['middleware' => ['guest:api']], function () {
        Route::post('/login', 'API\Auth\AuthController@login');

        // Customer
        Route::group(['prefix' => 'customer'], function () {
            // Register - POST
            Route::post('register', 'API\Auth\AuthController@customerRegister');
        });

        // Dealer
        Route::group(['prefix' => 'dealer'], function () {
            // Register - POST
            Route::post('register', 'API\Auth\AuthController@dealerRegister');
        });
    });

    // Require authentication token.
    Route::group(['middleware' => 'auth:api'], function () {
        // Logout - POST
        Route::post('/logout', 'API\Auth\AuthController@logout');
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

    // Return a product based on it's ID.
    Route::get('/{id}', 'API\Shop\ProductController@getProduct');

    // Return a product based on it's ID with it's variations.
    Route::get('/{id}/{panel}', 'API\Shop\ProductController@getPanelProduct');
});

Route::group(['prefix' => 'globals'], function () {
    // States
    Route::group(['prefix' => 'states'], function () {
        Route::get('/', 'API\Master\StateController@getStates');
    });
});
