<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// Products Routes.
Route::get('/products', 'ProductController@index');

//Route::get('products/create', 'ProductController@create');
Route::post('products', 'ProductController@store');

Route::get('products/{product}', 'ProductController@show');

//Route::get('products/{product}/edit', 'ProductController@edit');
Route::patch('products/{product}', 'ProductController@update');

Route::delete('products/{product}', 'ProductController@destroy');



// Guaranties Routes.
Route::get('guaranties', 'GuarantyController@index')->name('guaranties.index');

//Route::get('guaranties/create', 'GuarantyController@create');
Route::post('guaranties', 'GuarantyController@store');

Route::get('guaranties/{guaranty}', 'GuarantyController@show');

//Route::get('guaranties/{guaranty}/edit', 'GuarantyController@edit');
Route::patch('guaranties/{guaranty}', 'GuarantyController@update');

Route::delete('guaranties/{guaranty}', 'GuarantyController@destroy');



// Users Routes.
Route::get('users', 'UserController@index')->name('users.index');

//Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');

Route::get('users/{user}', 'UserController@show');

//Route::get('users/{user}/edit', 'UserController@edit');
Route::patch('users/{user}', 'UserController@update');

Route::delete('users/{user}', 'UserController@destroy');



// Comments Routes.
Route::get('comments', 'CommentController@index')->name('comments.index');

//Route::get('comments/create', 'CommentController@create');
Route::post('comments', 'CommentController@store');

Route::get('comments/{comment}', 'CommentController@show');

//Route::get('comments/{comment}/edit', 'CommentController@edit');
Route::patch('comments/{comment}', 'CommentController@update');

Route::delete('comments/{comment}', 'CommentController@destroy');



