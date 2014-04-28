<?php

class ReviewsController extends BaseController {

    public function apiReviews($id) {
        $reviewsfind = Reviews::find($id);
        if (!empty($reviewsfind)) {
            return Response::json($reviewsfind);
        } else {
            return 'Review not exist';
        }
    }

    public function apiDelReviews($id) {
        $reviewsfind = Reviews::find($id);
        if (!empty($reviewsfind)) {
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


//        if (!empty($input)) {
//            $tags = Input::get('tags');
//            var_dump($tags);
//            die();

        $name = Input::json('name');
        $heading = Input::json('heading_id');
        $text = Input::json('text');
        $author = Input::json('author');
        $tags = Input::json('tags');
        $news = Input::json('news');

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
        $mass = array(
            'success' => true,
            'message' => 'Added'
        );
        return Response::json($mass);
//        } else {
//            $mass = array(
//                'success' => FALSE,
//                'message' => 'Not delete!'
//            );
//            return Response::json($mass);
//        }
    }

    public function apiEditReviews() {

        $input = Input::json();
        $id = Input::get('id');
        $review = Reviews::find($id);
//          print_r($model);
//          die;
//            $tags = Input::get('tags');
//            var_dump($tags);
//            die();

        $name = Input::json('name');
        $heading = Input::json('heading_id');
        $text = Input::json('text');
        $author = Input::json('author');
        $tags = Input::json('tags');
        $news = Input::json('news');


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
        $mass = array(
            'success' => true,
            'message' => 'Added'
        );
        return Response::json($mass);
    }

    public function findByText() {
        $review = Reviews::where('name', 'like', '%' . Input::json('data') . '%')->get(array('id'));
//        return $review;
//        die;
        foreach ($review as $id) {
            $rev_mass = Reviews::find($id->id);
//            var_dump($rev_mass);

            $a[] = ['id' => $rev_mass->id,
                'name' => $rev_mass->name,
                'heading_id' => $rev_mass->heading_id,
                'text' => $rev_mass->text,
                'author' => $rev_mass->author,
                'news' => $rev_mass->news,
                'tags' => $rev_mass->tags,
            ];
//           $stack = array();
//           array_push($stack, $rev_mass);
//           var_dump($stack);
        }
        return Response::json($a);
    }

    public function findByTag() {
        $tag = Tags::where('name', 'like', '%' . Input::json('data') . '%')->get(array('id'));
//        return $tag;die;
        $rev_tags = Tags::find($tag->id)->reviews();
        return $rev_tags->reviews_id;die;
        foreach ($tag as $id){
        $rev_tags = Tags::find($id->id)->reviews();
        return $rev_tags->reviews_id;
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
