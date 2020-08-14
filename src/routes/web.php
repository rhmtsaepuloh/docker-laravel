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
Route::get('/', 'LoginController@show')->name('home');
Route::get('/daftar', 'LoginController@getLogin')->name('daftar');
Route::post('/daftar', 'LoginController@daftar')->name('daftar');
Route::get('/delete/{id}', 'LoginController@delete');
Route::get('/update/{id}', 'LoginController@getupdate');
Route::post('/update/{id}', 'LoginController@update');
