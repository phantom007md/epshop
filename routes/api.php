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
Route::get('products', 'ProductController@index')->name('home');
Route::post('products', 'ProductController@store');
Route::get('products/{product}', 'ProductController@show');
Route::patch('products/{product}', 'ProductController@update');
Route::delete('products/{product}', 'ProductController@destroy');


// Guaranties Routes.
Route::get('guaranties', 'GuarantyController@index');
Route::post('guaranties', 'GuarantyController@store');
Route::get('guaranties/{guaranty}', 'GuarantyController@show');
Route::patch('guaranties/{guaranty}', 'GuarantyController@update');
Route::delete('guaranties/{guaranty}', 'GuarantyController@destroy');



// Users Routes.
Route::get('users', 'UserController@index');
Route::post('users', 'UserController@store');
Route::get('users/{user}', 'UserController@show');
Route::patch('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');



// Comments Routes.
Route::get('comments', 'CommentController@index');
Route::post('comments', 'CommentController@store');
Route::get('comments/{comment}', 'CommentController@show');
Route::patch('comments/{comment}', 'CommentController@update');
Route::delete('comments/{comment}', 'CommentController@destroy');

