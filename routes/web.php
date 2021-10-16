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

Route::get('/','CommentController@index');
Route::post('/comment','CommentController@store');
Route::get('/comment/update/{id}','CommentController@create');
Route::post('/comment/update','CommentController@update');
route::post('/comment/delete','CommentController@destroy');
route::get('/search','CommentController@search');
route::get('/log','LogController@index');
Auth::routes();