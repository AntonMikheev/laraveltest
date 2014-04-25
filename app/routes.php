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

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showWelcome'));
Route::model('news', 'News');   
Route::get('news', array( 'as' => 'viewnews', 'uses' => 'NewsController@news'));
Route::get('heading', array( 'as' => 'viewheading', 'uses' => 'HeadingController@heading'));
Route::get('reviews', array('as' => 'viewreviews', 'uses' => 'ReviewsController@reviews'));
Route::get('tags', array('as' => 'viewtags', 'uses' => 'TagsController@tags'));
Route::get('deletenews/{news}', array('as' => 'delnews', 'uses' => 'NewsController@delete'));
Route::get('addnews', array('as' => 'add-news', 'uses' => 'NewsController@viewFormAddNews'));
Route::post('addnews', array('as' => 'add-news', 'uses' => 'NewsController@addNews'));
Route::get('editnews/{news}', array( 'as' => 'editdatnews', 'uses' => 'NewsController@viewFormEditNews')); 
Route::post('edit-news/{news}', array( 'as' => 'editnews', 'uses' => 'NewsController@editNews'));
Route::model('reviews', 'Reviews'); 
Route::get('deletereviews/{reviews}', array('as' => 'delreviews', 'uses' => 'ReviewsController@delete'));
Route::get('addreviews', array('as' => 'add-reviews', 'uses' => 'ReviewsController@viewFormAddReviews'));
Route::post('addreviews', array('as' => 'add-reviews', 'uses' => 'ReviewsController@addReviews'));
Route::get('editreviews/{reviews}', array( 'as' => 'editdatreviews', 'uses' => 'ReviewsController@viewFormEditReviews')); 
Route::post('edit-reviews/{reviews}', array( 'as' => 'editreviews', 'uses' => 'ReviewsController@editReviews'));

Route::get('api.laraveltest/reviews/{id}',array('as' => 'api.reviews', 'uses' => 'ReviewsController@apiReviews'));
Route::post('api.laraveltest/findreview', array('as'=> 'api.findreviews', 'uses' =>'ReviewsController@apiFindReviews'));
Route::delete('api.laraveltest/reviewsdel/{id}',array('as' => 'api.reviews.del', 'uses' => 'ReviewsController@apiDelReviews'));
Route::post('api.laraveltest/addreviews', array('as' => 'api.reviews.add', 'uses' => 'ReviewsController@apiAddReviews'));
Route::post('api.laraveltest/findbytext', array('as' => 'api.reviews.findbytext', 'uses' => 'ReviewsController@findByText'));
Route::put('api.laraveltest/editreviews', array('as' => 'api.reviews.edit', 'uses' => 'ReviewsController@apiEditReviews'));

