<?php

class NewsController extends BaseController {

    public function news() {
        $news = News::all();
        return View::make('News');
    }

    public static function viewFormEditNews($news) {
        //var_dump($news->heading_id);
        $type = array('name' => $news->name, 
                      'heading_id' => $news->heading_id,
                      'text' => $news->text,
                      'id' => $news->id,
                      'author' => $news->author,
                        );
        return View::make('formEditNews', $type);
    }
    public static function editNews($news) {
        $name = Input::get('name');
        $heading = Input::get('heading');
        $text = Input::get('text');
        $author = Input::get('author');
        $tags = Input::get('tags');
        $reviews = Input::get('reviews');
        
        $model = News::find($news->id);
        $model->name = $name;
        $model->heading_id = $heading;
        $model->text = $text;
        $model->author = $author;
//        $model = Input::get('tags');
//        $model = Input::get('reviews');
        
        $model->save();
        $url = 'edit-news/' .$model->id;
        return Redirect::to($url);
    }

    public static function delete($news2) {

//        print_r($news2);
        $news2->delete();
        //$news = News::find();
//        
        //$affected = DB::table('news')->delete(3);
        return Redirect::to('news');
        //var_dump($news);
    }

    public function viewFormAddNews() {
        return View::make('formAddNews');
    }
    public function addNews() {
        $name = Input::get('name');
        $heading = Input::get('heading');
        $text = Input::get('text');
        $author = Input::get('author');
        $tags = Input::get('tags');
        $reviews = Input::get('reviews');
        
        $model = new News;
        $model->name = $name;
        $model->heading_id = $heading;
        $model->text = $text;
        $model->author = $author;
//        $model = Input::get('tags');
//        $model = Input::get('reviews');
        
        $model->save();
//        $url = 'edit-news/' .$model->id;
        return Redirect::to('news');
    }

    

}
