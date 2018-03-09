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

// Products Routes.
Route::get('/', 'ProductController@index')->name('home');

Route::get('products/create', 'ProductController@create');
Route::post('products', 'ProductController@store');
Route::delete('products/{product}', 'ProductController@destroy');

// Guaranties Routes.
Route::get('guaranties', 'GuarantyController@index')->name('guaranties.index');
Route::get('guaranties/create', 'GuarantyController@create');
Route::post('guaranties', 'GuarantyController@store');
Route::delete('guaranties/{guaranty}', 'GuarantyController@destroy');

// Admins Routes.
Route::get('admins', 'AdminController@index')->name('admins.index');
Route::get('admins/create', 'AdminController@create');
Route::post('admins', 'AdminController@store');
Route::delete('admins/{admin}', 'AdminController@destroy');

// Users Routes.
Route::get('users', 'UserController@index')->name('users.index');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');
Route::get('users/{user}', 'UserController@destroy');
