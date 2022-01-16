<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    private $products = [
        1 => [
            'title' => 'product 1'
        ],
        2 => [
            'title' => 'product 2'
        ]
    ];

    public function index()
    {

        $response = '';
        foreach ($this->products as $id => $item) {
            $url = route('catalog::card', ['id' => $id]);
            $response .= "<div>
                <a href='{$url}'>
                        {$item['title']}
                </a>
                  </div>";
        }
        return $response;
    }

    public function card($id)
    {
        $products = $this->products[$id];
        return $products['title'];
    }


}
