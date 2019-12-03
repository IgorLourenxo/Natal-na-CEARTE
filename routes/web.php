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

// Routes for authentication (we disable registration for obvious reasons as we only need the administrator account that gets created manually in the database)
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

// Messages routes
Route::resource('messages', 'MessagesController');
