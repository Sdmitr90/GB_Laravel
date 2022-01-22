<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = (new News())->getNews();
        return view('mysite.news.news', ['news' => $news]);
    }

    public function category($id)
    {
        $news = (new News())->getNews();
        return view('mysite.news.category.category', ['news' => $news, 'id' => $id]);
    }

    public function card($id, $cardId)
    {
        $news = (new News())->getNews();
        return view('mysite.news.category.card.card', ['news' => $news, 'id' => $id, 'cardId' => $cardId]);
    }
}
