<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'LocationController@index')->name('location');
Route::get('/payment/{business}', 'PaymentController@index')->name('payment');
Route::get('/gift/{business}', 'GiftController@index')->name('gift');
Route::get('/{location}', 'HomeController@index')->name('home');
Route::get('/{location}/business/{category}', 'BusinessController@index')->name('business');
