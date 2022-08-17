<?php

namespace App\Http\Controllers;

use App\Models\AgendaYear;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\ProgramYear;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)
  {
    $sliders = Slider::all();
    $articles = Article::paginate(6)->withQueryString();
    $galleries = Gallery::all();

    $years = AgendaYear::all()->sortBy("year");

    $dates = ProgramYear::all()->sortBy("year");

    return view("pages.home", [
      "sliders" => $sliders,
      "articles" => $articles,
      "galleries" => $galleries,
      "years" => $years,
      "dates" => $dates,
    ]);
  }
}
