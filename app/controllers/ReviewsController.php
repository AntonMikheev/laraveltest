<?php

class ReviewsController extends BaseController {

//    public $revErrors = array(
//        '404' => 'not found',
//    );


    public function apiReviews($id) {
        $reviewsfind = Reviews::find($id);
        if ($reviewsfind !== NULL) {
            return Response::json($reviewsfind);
        } else {
            return 'Review not exist';
        }
    }

    public function apiDelReviews($id) {
        $reviewsfind = Reviews::find($id);
        if ($reviewsfind !== NULL) {
            $reviewsfind->delete();
            $mass = array(
                'success' => true,
                'message' => 'Delete'
            );
            return Response::json($mass);
        } else {
            $mass = array(
                'success' => FALSE,
                'message' => 'Not delete!'
            );
            return Response::json($mass);
        }
    }

    public function apiAddReviews() {
        
    }

    public function reviews() {
        View::share('reviews', Reviews::all());
        return View::make('Reviews');
    }

    public function viewFormEditReviews($reviews) {
        $heading = Heading::all();
        $heading_mass_select = array();
        foreach ($heading as $item) {
            $heading_mass_select[$item->id] = $item->name;
        }
        $tags = Tags::all();
        $tags_mass_select = array();
        foreach ($tags as $item) {
            $tags_mass_select[$item->id] = $item->name;
        }
        $news = News::all();
        $news_mass_select = array();
        foreach ($news as $item) {
            $news_mass_select[$item->id] = $item->name;
        }
        $type = array('name' => $reviews->name,
            'heading_id' => $reviews->heading_id,
            'text' => $reviews->text,
            'id' => $reviews->id,
            'author' => $reviews->author,
            'tags2' => $reviews->tags,
            'news2' => $reviews->news,
            'heading_mass' => $heading_mass_select,
            'tags_mass' => $tags_mass_select,
            'news_mass' => $news_mass_select,
        );
        return View::make('formEditReviews', $type);
    }

    public function editReviews($reviews) {
        $name = Input::get('name');
        $heading = Input::get('heading');
        $text = Input::get('text');
        $author = Input::get('author');
        $tags = Input::get('tags');
        $news = Input::get('news');

        $model = Reviews::find($reviews->id);
        $model->name = $name;
        $model->heading_id = $heading;
        $model->text = $text;
        $model->author = $author;

        foreach ($tags as $tag) {
            Tags::find($tag)->reviews()->save($model);
        }
        foreach ($news as $new) {
            News::find($new)->reviews()->save($model);
        }
        $model->save();
        return Redirect::route('viewreviews');
    }

    public function delete($reviews) {
        $reviews->delete();
        return Redirect::to('reviews');
    }

    public function viewFormAddReviews() {
        $heading = Heading::all();
        $heading_mass_select = array();
        foreach ($heading as $item) {
            $heading_mass_select[$item->id] = $item->name;
        }
        $tags = Tags::all();
        $tags_mass_select = array();
        foreach ($tags as $item) {
            $tags_mass_select[$item->id] = $item->name;
        }
        $news = News::all();
        $news_mass_select = array();
        foreach ($news as $item) {
            $news_mass_select[$item->id] = $item->name;
        }
        $mass = array('heading_mass' => $heading_mass_select,
            'tags_mass' => $tags_mass_select,
            'news_mass' => $news_mass_select,
        );
        return View::make('formAddReviews', $mass);
    }

    public function addReviews() {
        $name = Input::get('name');
        $heading = Input::get('heading');
        $text = Input::get('text');
        $author = Input::get('author');
        $tags = Input::get('tags');
        $news = Input::get('news');

        $model = new Reviews;
        $model->name = $name;
        $model->heading_id = $heading;
        $model->text = $text;
        $model->author = $author;
        DB::transaction(function () use ($model, $tags, $news) {
            $model->save();
            foreach ($tags as $tag) {
                Tags::find($tag)->reviews()->save($model);
            }
            foreach ($news as $new) {
                News::find($new)->reviews()->save($model);
            }
        });
        return Redirect::route('viewreviews');
    }

}
