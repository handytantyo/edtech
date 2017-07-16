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

Route::get('/','LandingController@index')->name('index');

Route::get('learning','LandingController@learning');
Route::get('learning/view','LandingController@course');
Auth::routes();

Route::get('home', 'LandingController@index');
//Route::get('logout', 'HomeController@index');
