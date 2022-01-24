<?php

namespace App\Http\Controllers;

use App\Models\Home;

class HomeController extends Controller
{


    public function index()
    {
        $home = (new Home())->index();
        return view('mysite.menu', ['pages' => $home]);
    }

    public function titles($item)
    {
                return $item;
    }
}
