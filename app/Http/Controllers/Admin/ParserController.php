<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Orchestra\Parser\Xml\Facade as XmlParser;
use App\Models\News;

class ParserController extends Controller
{
    public function index()
    {
        $xml = XmlParser::load('https://3dnews.ru/news/rss/');
        $data = $xml->parse([
            'channel_title' => ['uses' => 'channel.title'],
            'chanel_description' => ['uses' => 'channel.description'],
            'items' => ['uses' => 'channel.item[title,description,category]'],
        ]);
        dd($data); // Код ниже работает, это заглушка для себя
        foreach ($data['items'] as $item) {
            $news = new News();
            $news->categories_id = 1;
            $news->news_name = $item['title'];
            $news->news_description = $item['description'];
            $news->save();
        }

    }
}
