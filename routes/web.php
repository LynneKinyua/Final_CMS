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

Route::middleware('auth', 'isAdmin')->namespace('admin')->group(function(){
    Route::get('admin/users', 'UsersController@index')->name('admin.users');
    Route::get('admin/user/{id}', 'UsersController@getUser')->name('admin.user');
    Route::post('admin/users/store', 'UsersController@store')->name('admin.users.store');
    Route::get('admin\adminleads','AdminLeadsController@index')->name('admin.adminleads');
});

Route::get('/home', 'HomeController@index')->name('home');

