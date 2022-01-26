<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('mysite.about.feedback');
    }

    public function create(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('content');
        $email = $request->input('email');
        //сохраняем данные в базу
        return redirect()->route('home::pages');

    }
}
