<?php

namespace App\Models;

class News
{
    private $news = [
        1 => [
            'title' => 'news category 1',
            1 => ['news 1', 'содержимое первой новости'],
            2 => ['news 2','содержимое второй новости'],
        ],
        2 => [
            'title' => 'news category 2',
            1 => ['news 1', 'содержимое первой новости'],
            2 => ['news 2','содержимое второй новости'],
        ]
    ];

    /**
     * @return array
     */
    public function getNews()
    {
        return $this->news;
    }
}
