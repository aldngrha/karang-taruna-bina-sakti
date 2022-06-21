<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $sliders = Slider::all();
        $articles = Article::all();
        $galleries = Gallery::all();

        return view("pages.home", [
            "sliders" => $sliders,
            "articles" => $articles,
            "galleries" => $galleries,
        ]);
    }
}
