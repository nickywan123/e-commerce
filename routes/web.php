<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('dashboard')->group(function () {
    Route::prefix('dealer')->group(function () {
        Route::get('/', function () {
            return view('dealer.dealer');
        });

        Route::get('/statement', function () {
            return view('dealer.dealerStatement');
        });
    });

    Route::prefix('panel')->group(function () {
    });
});


Route::resource('/dashboard/dealer', 'DashBoardDealerController');


// Route::get('/dashboard/dealer', function () {

//     return view('dealer.dealer');
// });
