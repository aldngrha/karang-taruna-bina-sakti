<?php

namespace App\Http\Controllers;

use App\Models\AgendaYear;
use App\Models\Article;
use App\Models\Program;
use App\Models\ProgramYear;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
  public function index(Request $request, $slug)
  {
    $article = Article::where("slug", $slug)->firstOrFail();
    $articles = Article::all();
    $years = AgendaYear::all()->sortBy("year");
    $dates = ProgramYear::all()->sortBy("year");

    return view("pages.single-post", [
      "article" => $article,
      "articles" => $articles,
      "years" => $years,
      "dates" => $dates,
    ]);
  }
}
