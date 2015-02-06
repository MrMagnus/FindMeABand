<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' =>'PagesController@index']);

Route::get('/profile', ['before' => 'auth', 'as' => 'profile', 'uses' => 'UsersController@show_profile']);
Route::post('/sessions/store', ['as' => 'sessions.store', 'uses' => 'SessionsController@store']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);