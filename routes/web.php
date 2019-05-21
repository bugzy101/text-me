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

Route::get('/', array('uses' => 'HomeController@showLogin'));

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));


// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::post('log', 'HomeController@messageLog');

Route::get('reply_sms', 'smsController@replySms');

Route::post('logout', array('uses' => 'HomeController@doLogout'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
