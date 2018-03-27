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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@index');
Route::get('/create', 'ProductController@create');
Route::get('/edit/{id}', 'ProductController@edit');
Route::get('/show/{id}', 'ProductController@show');
Route::get('/destroy/{id}','ProductController@destroy');



Route::post('/add_item', 'ProductController@store');
Route::post('/edit_item/{id}', 'ProductController@update');

