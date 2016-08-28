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


Route::get('about', 'PagesController@about');
Route::get('/', 'PagesController@home');

Route::get('laravel-version', function() {
  $laravel = app();
  return "Your Laravel version is ".$laravel::VERSION;
});

Route::get('login', function() {
  return "Login";
});

Route::get('cards', 'CardsController@index');
