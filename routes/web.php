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


// return view for dealer home page
Route::get('/dashboard/dealer', 'Dealer\DashboardController@dashboard')->name('dealer');

Route::get('/dashboard/dealer/statements', 'Dealer\DashboardController@statements');

Route::get('/dashboard/dealer/statements/invoice', 'Dealer\DashboardController@viewInvoice');

Route::get('/dashboard/dealer/purchase_order', 'Dealer\DashboardController@viewPurchaseOrder');


// return registration form for dealer

Route::get('/registrations/dealer', function () {

    return view('registrations.dealer');
});


//return panel dashboard

Route::get('/dashboard/panel', function () {

    return view('panel.panel');
})->name('panel');
