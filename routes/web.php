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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/// USER CONTROLLER
Route::post('/save', 'UserController@save')->name('user-save');

Route::get('/payment/success', 'PaymentController@success')
        ->name('payment.success');