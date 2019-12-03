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

// Handling routes
Route::get('/', 'PagesController@index');
Route::get('/mensagem', 'PagesController@message');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
