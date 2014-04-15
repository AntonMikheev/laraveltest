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

Route::get('/', function() {
    return View::make('hello');
});
Route::get('some', function() {
    return View::make('some');
});
Route::get('test1', function() {
    return View::make('test1');
});
Route::get('news', function() {
    return View::make('News');
});
Route::get('infoedit', function() {
    return View::make('InfoEdit');
});
Route::get('infoadd', function() {
    return View::make('InfoAdd');
});
Route::get('news2', 'NewsController@news'); 