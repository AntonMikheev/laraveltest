<?php

class ReviewsController extends BaseController {

    public function apiReviews($id) {
        $reviewsfind = Reviews::find($id);
        if (!empty($reviewsfind)) {
            return Response::json($reviewsfind);
        } else {
            return Config::get('testconst.error_request');
        }
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
        $heading = Input::json('heading_id');
        $text = Input::json('text');
        $author = Input::json('author');
        $tags = Input::json('tags');
        $news = Input::json('news');

        if (isset($name) && isset($heading) && isset($text) && isset($author) && isset($tags) && isset($news)) {
            $review = new Reviews;
            $review->name = $name;
            $review->heading_id = $heading;
            $review->text = $text;
            $review->author = $author;
            $review->save();
            DB::transaction(function () use ($tags, $news, $review) {
                if (!empty($tags)) {
//                 foreach ($tags as $tag) {
                    Tags::find($tags)->reviews()->save($review);
//                 }
                }
                if (!empty($news)) {
//                    foreach ($news as $new) {
                    News::find($news)->reviews()->save($review);
//                    }
                }
            });
            return Config::get('testconst.success_add');
        } else {
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

            DB::transaction(function () use ($tags, $news, $review) {
                if (!empty($tags)) {
//                 foreach ($tags as $tag) {
                    Tags::find($tags)->reviews()->save($review);
//                 }
                }
                if (!empty($news)) {
//                    foreach ($news as $new) {
                    News::find($news)->reviews()->save($review);
//                    }
                }
            });
            return Config::get('testconst.success_edit');
        } else {
            return Config::get('testconst.error_request');
        }
    }

    public function findByText() {
        $review = Reviews::where('name', 'like', '%' . Input::json('data') . '%')->get(array('id'));
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

    public function findByTag() {
        $review = Tags::where('name', 'like', '%' . Input::json('data') . '%')->get(array('id'));
        $rev = Tags::find($review[0]->id)->reviews()->get();
        $new = Tags::find($review[0]->id)->news()->get();
        $response = array();
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
