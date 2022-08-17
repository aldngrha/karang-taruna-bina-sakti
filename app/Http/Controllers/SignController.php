<?php

namespace App\Http\Controllers;

use App\Models\AgendaYear;
use App\Models\Gallery;
use App\Models\ProgramYear;
use Illuminate\Http\Request;

class SignController extends Controller
{
  public function index(Request $request)
  {
    $galleries = Gallery::all();
    $items = AgendaYear::all()->sortBy("year");
    $dates = ProgramYear::all()->sortBy("year");

    return view("pages.sign", [
      "galleries" => $galleries,
      "items" => $items,
      "dates" => $dates,
    ]);
  }
}
