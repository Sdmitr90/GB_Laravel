<?php

namespace App\Models;

class Home
{
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

    /**
     * @return array
     */
    public function index()
    {
        return $this->pages;
    }
}
