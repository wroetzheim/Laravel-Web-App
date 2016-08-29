<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
//modifying route lookup to be case insensitive.
//redirect to lowercase URI using middleware.
Route::get('{cards}', 'CardsController@index')->where('cards', '(?i:cards)')->middleware('lowercase');

//use {variable_name} to wildcard for routing.
Route::get('cards/{card}', 'CardsController@show');
//show version of laravel currently being used.
Route::get('laravel-version', function() {
  $laravel = app();
  return "Your Laravel version is ".$laravel::VERSION;
});

Auth::routes();

Route::get('/home', 'HomeController@index');
