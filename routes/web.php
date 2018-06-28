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

Route::get('/', 'ThreadController@index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('threads', 'ThreadController', ['except' => ['index', 'show']]);

Route::get('threads/{channel}/{thread}', 'ThreadController@show')->name('threads.show');

Route::delete('threads/{channel}/{thread}', 'ThreadController@destroy')->name('threads.delete');

Route::get('threads/{channel?}', 'ThreadController@index')->name('threads.index');

Route::post('threads/{channel}/{thread}/replies', 'ReplyController@store');

Route::post('replies/{reply}/favorites', 'FavoriteController@store')->name('replies.store');

Route::get('profile/{user}', 'ProfileController@show')->name('profile');




