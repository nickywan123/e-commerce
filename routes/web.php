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


// controller to return view for dealer home page
Route::resource('/dashboard/dealer', 'DashBoardDealerController');



Route::get('/dashboard/panel', function () {

    return view('panel.panel');
});
