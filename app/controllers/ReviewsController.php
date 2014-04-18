<?php
class ReviewsController extends BaseController
{
    public function reviews() {
        $reviews = Reviews::all();
        return View::make('Reviews');
        
    }
    
}
