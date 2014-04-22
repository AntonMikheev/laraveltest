<?php


class Reviews extends Eloquent  {

    protected $table = 'reviews';
    public $timestamps = false;
    
    public function news() {
        return $this->belongsToMany('News', 'news_reviews_con');
    }
	
}