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

Route::get('products/{product}', 'ProductController@show');

Route::get('products/{product}/edit', 'ProductController@edit');
Route::post('products/{product}/update', 'ProductController@update');

Route::get('products/{product}/delete', 'ProductController@destroy');



// Guaranties Routes.
Route::get('guaranties', 'GuarantyController@index')->name('guaranties.index');

Route::get('guaranties/create', 'GuarantyController@create');
Route::post('guaranties', 'GuarantyController@store');

Route::get('guaranties/{guaranty}', 'GuarantyController@show');

Route::get('guaranties/{guaranty}/edit', 'GuarantyController@edit');
Route::post('guaranties/{guaranty}/update', 'GuarantyController@update');

Route::get('guaranties/{guaranty}/delete', 'GuarantyController@destroy');



// Users Routes.
Route::get('users', 'UserController@index')->name('users.index');

Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');

Route::get('users/{user}', 'UserController@show');

Route::get('users/{user}/edit', 'UserController@edit');
Route::post('users/{user}/update', 'UserController@update');

Route::get('users/{user}/delete', 'UserController@destroy');



// Comments Routes.
Route::get('comments', 'CommentController@index')->name('comments.index');

Route::get('comments/create', 'CommentController@create');
Route::post('comments', 'CommentController@store');

Route::get('comments/{comment}', 'CommentController@show');

Route::get('comments/{comment}/edit', 'CommentController@edit');
Route::post('comments/{comment}/update', 'CommentController@update');

Route::get('comments/{comment}/delete', 'CommentController@destroy');


