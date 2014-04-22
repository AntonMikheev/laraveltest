<?php


class Tags extends Eloquent  {

    protected $table = 'tags';
    public $timestamps = false;
    
	public function news() {
        return $this->belongsToMany('News', 'news_tags');
    }
}