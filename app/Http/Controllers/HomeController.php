<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $pages = [
        1 => [
            'title' => 'news'
        ],
        2 => [
            'title' => 'catalog'
        ],
        3 => [
            'title' => 'registration'
        ],
        4 => [
            'title' => 'about'
        ]
    ];

    public function index()
    {
        $response = '';
        foreach ($this->pages as $id) {
            $url = route('home::titles', ['item' => $id['title']]);
            $response .= "<div>
                <a href='{$url}'>
                        {$id['title']}
                </a>
                  </div>";
        }
        return $response;
    }

    public function titles($item)
    {
        foreach ($this->pages as $id) {
            if ($id['title'] == $item) {
                return $item;
            }
        }
        $url = route('home::pages');
        return
            "<div>
                <p> Такой страницы не существует! </p>
                <a href='{$url}'>Домой</a>
            </div>";
    }
}
