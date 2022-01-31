<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::getNews();
        return view('admin.news.index')->with(['news' => $news]);
    }

    public function create(Request $request)
    {

        if ($request->input('news_id')) {
            $news = News::find($request->input('news_id'));
        } else {
            $news = new News();
        }
        $news->categories_id = $request->input('category');
        $news->news_name = $request->input('title');
        $news->news_description = $request->input('content');

        $news->save();

        return redirect()->route('admin::news::index');
    }

    public function update($id)
    {
        $news = News::getNewsById($id);
        return view('admin.news.update')->with(['news' => $news]);
    }

    public function new(Request $request)
    {
        return view('admin.news.create');
    }

    public function delete($id)
    {
        News::find($id)->delete();
        return redirect()->route('admin::news::index');
    }
}
