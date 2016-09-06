<?php

/**
|
| Dump SQL query
*/
//DB::listen(function($query) {
//	var_dump($query->sql, $query->bindings);
//});

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

//show version of laravel currently being used.
Route::get('version', function() {
    $laravel = app();
    $response = "Your Laravel version is ".$laravel::VERSION;
    return $response;
});

/**
 * Card Routes
 */

//home page route
Route::get('/', 'PagesController@home');

//about page route
Route::get('about', 'PagesController@about');

//modifying route lookup to be case insensitive.
//redirect to lowercase URI using middleware.
//this middleware is registered in Kernel.php
Route::get('{cards}', 'CardsController@index')->where('cards', '(?i:cards)')->middleware('lowercase');

//use {variable_name} to wildcard for routing.
Route::get('cards/{card}', 'CardsController@show');

//add new card
Route::post('cards/add', 'CardsController@store');

/**
 * Note Routes
 */

//add a new note.
Route::post('cards/{card}/notes', 'NotesController@store');

//open edit page to edit an existing note.
Route::get('notes/{note}/edit', 'NotesController@edit');

//update an existing note.
Route::patch('notes/{note}', 'NotesController@update');


/**
 * Authentication Routes
 */
Auth::routes();

Route::get('/home', 'HomeController@index');
