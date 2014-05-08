<?php

class ReviewsController extends BaseController {


    public function apiReviews() {
        $data = Reviews::all();
        return Response::json($data);
    }

    public function apiSingleReview($id) {

        $review = Reviews::find($id);
//        return $review;
        if (!empty($review)) {
            return Response::json($review);
        } else {
            return Config::get('testconst.error_request');
        }
    }

    public function apiReturnData() {
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

        return Response::json($mass);
    }

    public function apiReturnDataId($id) {

//        return $id;
        $reviews = Reviews::find($id);
        $tags_old = Reviews::find($id)->tags()->get();
        $news_old = Reviews::find($id)->news()->get();
//        return $tags_old[0]->id;
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
        $mass = array('name' => $reviews->name,
            'heading_id' => $reviews->heading_id,
            'text' => $reviews->text,
            'id' => $reviews->id,
            'author' => $reviews->author,
            'tags' => $tags_old[0]->id,
            'news' => $news_old[0]->id,
            'heading_mass' => $heading_mass_select,
            'tags_mass' => $tags_mass_select,
            'news_mass' => $news_mass_select,
        );
        return $mass;
        return Response::json($mass);
    }

    public function apiDelReviews($id) {
        $reviewsfind = Reviews::find($id);
        if (!empty($reviewsfind)) {
            $reviewsfind->delete();
            return Config::get('testconst.success_del');
        } else {
            return Config::get('testconst.error_request');
        }
    }

    public function apiAddReviews() {

        $name = Input::json('name');
        $heading_id = Input::json('heading_id');
        $text = Input::json('text');
        $author = Input::json('author');
        $tags = Input::json('tags');
        $news = Input::json('news');

        if (isset($name) && isset($heading_id) && isset($text) && isset($author) && isset($tags) && isset($news)) {
            $review = new Reviews;
            $review->name = $name;
            $review->heading_id = $heading_id;
            $review->text = $text;
            $review->author = $author;
            $review->save();
            if (!empty($tags)) {
                foreach ($tags as $tag) {
                    Tags::find($tag)->reviews()->save($review);
                }
            }
                if (!empty($news)) {
                    foreach ($news as $new) {
                        News::find($new)->reviews()->save($review);
                    }
                }
            return Config::get('testconst.success_add');
//            return $review;
        }
    else {
            return Config::get('testconst.error_request');
        }
    }

    public function apiEditReviews() {

        $id = Input::json('id');
        $name = Input::json('name');
        $heading = Input::json('heading_id');
        $text = Input::json('text');
        $author = Input::json('author');
        $tags = Input::json('tags');
        $news = Input::json('news');
        $review = Reviews::find($id);
        if (isset($review)) {
            if (isset($name)) {
                $review->name = $name;
            }
            if (isset($heading)) {
                $review->heading_id = $heading;
            }
            if (isset($text)) {
                $review->text = $text;
            }
            if (isset($author)) {
                $review->author = $author;
            }
            $review->save();
            if (!empty($tags)) {
                foreach ($tags as $tag) {
                    Tags::find($tag)->reviews()->save($review);
                }
            }
            if (!empty($news)) {
                foreach ($news as $new) {
                    News::find($new)->reviews()->save($review);
                }
            }
            return Config::get('testconst.success_edit');
        } else {
            return Config::get('testconst.error_request');
        }
    }

    public function findByText() {
        $review = Reviews::where('name', 'like', '%' . Input::json('data') . '%')->get(array('id'));
//        return $review;die;
        if(!$review->IsEmpty()) {
            foreach ($review as $id) {
                $rev_mass = Reviews::find($id->id);
                $a[] = ['id' => $rev_mass->id,
                    'name' => $rev_mass->name,
                    'heading_id' => $rev_mass->heading_id,
                    'text' => $rev_mass->text,
                    'author' => $rev_mass->author,
                    'news' => $rev_mass->news,
                    'tags' => $rev_mass->tags,
                ];
            }
            return Response::json($a);
        }
        else {
            return Config::get('testconst.error_request');
        }
    }

    public function findByTag() {
        $review = Tags::where('name', 'like', '%' . Input::json('data') . '%')->get(array('id'));
        $rev = Tags::find($review[0]->id)->reviews()->get();
        $new = Tags::find($review[0]->id)->news()->get();
        $response = array();
        if(!empty($new)&&!empty($rev)) {
            foreach ($new as $item) {
                $response['News'][] = [
                    'id' => $item->id,
                    'name' => $item->name,
                    'heading_id' => $item->heading_id,
                    'text' => $item->text,
                    'author' => $item->author,
                    'reviews' => $item->reviews_id,
                    'tags' => $item->tags_id,
                ];
            }
            foreach ($rev as $item) {
                $response['Reviews'][] = [
                    'id' => $item->id,
                    'name' => $item->name,
                    'heading_id' => $item->heading_id,
                    'text' => $item->text,
                    'author' => $item->author,
                    'news' => $item->news_id,
                    'tags' => $item->tags_id,
                ];
            }
            return Response::json($response);
        }
        elseif(!empty($new)&&empty($rev)){
            foreach ($new as $item) {
                $response['News'][] = [
                    'id' => $item->id,
                    'name' => $item->name,
                    'heading_id' => $item->heading_id,
                    'text' => $item->text,
                    'author' => $item->author,
                    'reviews' => $item->reviews_id,
                    'tags' => $item->tags_id,
                ];
            }
            return Response::json($response);
        }
        elseif(empty($new)&&!empty($rev)){
            foreach ($new as $item) {
                $response['Reviews'][] = [
                    'id' => $item->id,
                    'name' => $item->name,
                    'heading_id' => $item->heading_id,
                    'text' => $item->text,
                    'author' => $item->author,
                    'reviews' => $item->reviews_id,
                    'tags' => $item->tags_id,
                ];
            }
            return Response::json($response);
        }
        else {
            return Config::get('testconst.error_request');
        }
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

        $input = Input::all();
        $rules = array(
            'name' => 'required|alpha_num',
            'heading_id' => 'num',
            'text' => 'required|alpha_num',
            'author' => 'required|alpha_num',
            'tags' => 'num',
            'news' => 'num',
        );
        $validation = Validator::make($input, $rules);
        if ($validation->fails()) {
            return Redirect::back()->withErrors($key);
        } else {
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
            if (!empty($tags)) {
                foreach ($tags as $tag) {
                    Tags::find($tag)->reviews()->save($model);
                }
            }

            if (!empty($news)) {
                foreach ($news as $new) {
                    News::find($new)->reviews()->save($model);
                }
            }
        });
        return Redirect::route('viewreviews');
    }

}
