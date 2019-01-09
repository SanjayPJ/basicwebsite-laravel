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

Route::get('/', 'PagesController@get_home');
Route::get('/about', 'PagesController@get_about');
Route::get('/contact', 'PagesController@get_contact');
Route::post('/contact/submit', 'MessagesController@submit');
Route::get('/messages', 'MessagesController@get_messages');