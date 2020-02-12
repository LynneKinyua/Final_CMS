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

Route::get('/', 'HomeController@index') ->name('home');

Auth::routes();

Route::middleware('auth')->namespace('Admin')->group(function(){
    Route::get('admin/users', 'UsersController@index');
    Route::get('admin/user/{id}', 'UsersController@getUser');
    Route::post('admin/users/store', 'UsersController@store');
    Route::get('admin/adminleads','AdminLeadsController@index');
    Route::get('clients','ClientsController@index');
    Route::post('clients', 'ClientsController@store');

});

Route::get('/home', 'HomeController@index')->name('home');

