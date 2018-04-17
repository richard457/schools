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
Route::post('add_account', 'AccountController@index')->name('home');
Route::get('get_user', 'User@getUser')->name('home');
Route::get('get_accounts', 'AccountController@getAccount')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
