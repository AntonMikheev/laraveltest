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
Route::get('news', 'NewsController@news');
Route::get('heading', 'HeadingController@heading');
Route::get('reviews', 'ReviewsController@reviews');
Route::get('tags', 'TagsController@tags');
Route::get('deletenews', 'NewsController@delete');
Route::get('add-news', 'NewsController@viewFormAddNews');
Route::post('add-news', 'NewsController@addNews');
Route::get('edit-news', 'NewsController@viewFormEditNews');
Route::post('edit-news', 'NewsController@editNews');


//
//Route::model('news', 'News');
//
//Route::get('one-news/{news}', function(News $news){
//    return NewsController::getViewsOneNews($news);
//});



Route::model('news', 'News');   
Route::get('deletenews/{news}', function (News $news) {    
    //print_r($news);
    return NewsController::delete($news);
});

Route::get('edit-news/{news}', function(News $news) {
    return NewsController::viewFormEditNews($news); 
}); 
Route::post('edit-news/{news}', function (News $news){
    return NewsController::editNews($news);
    
});