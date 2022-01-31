<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    public function index()
    {

        $news = News::with('category')->get();

        return view('news.index', ['news' => $news]);
    }

    public function list(int $categoryId)
    {
        return view('news.list', ['news' => News::getByCategoryId($categoryId)]);
    }


    public function card(News $news)
    {
        return view('news.card', ['item' => $news]);
    }

//    public function index()
//    {
//        $news = (new News())->getNews();
//        return view('mysite.news.news', ['news' => $news]);
//    }
//
//    public function category($id)
//    {
////        $news = (new News())->getNews();
////        return view('mysite.news.category.category', ['news' => $news, 'id' => $id]);
//        $news = (new News())->getNewsDB();
//        return view('mysite.news.category.category', ['news' => $news, 'id' => $id]);
//    }
//
//    public function card($id, $cardId)
//    {
//        $news = (new News())->getNewsDB();
//        return view('mysite.news.category.card.card', ['news' => $news, 'id' => $id, 'cardId' => $cardId]);
//    }
}
