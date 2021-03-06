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

Route::get('api/users', 'UsersController@index');

Route::get('api/users/{id}', 'UsersController@show');

Route::delete('api/user/{id}', 'UsersController@destroy');
