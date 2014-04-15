<?php
class NewsController extends BaseController
{
    public function news() {
        $news = News::all();
        return View::make('News');
    }
    
}

