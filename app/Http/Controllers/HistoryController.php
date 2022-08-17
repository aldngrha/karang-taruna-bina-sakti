<?php

namespace App\Http\Controllers;

use App\Models\AgendaYear;
use App\Models\Gallery;
use App\Models\History;
use App\Models\ProgramYear;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
  public function index(Request $request)
  {
    $histories = History::all();
    $galleries = Gallery::all();
    $years = AgendaYear::all()->sortBy("year");
    $dates = ProgramYear::all()->sortBy("year");

    return view("pages.history", [
      "histories" => $histories,
      "galleries" => $galleries,
      "years" => $years,
      "dates" => $dates,
    ]);
  }
}
