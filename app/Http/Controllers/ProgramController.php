<?php

namespace App\Http\Controllers;

use App\Models\AgendaYear;
use App\Models\Gallery;
use App\Models\Program;
use App\Models\ProgramYear;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
  public function index(Request $request, $slug)
  {
    $galleries = Gallery::all();
    $programs = ProgramYear::with(["programs"])
      ->where("slug", $slug)
      ->firstOrFail();

    $dates = ProgramYear::all()->sortBy("year");
    $years = AgendaYear::all()->sortBy("year");

    return view("pages.program", [
      "programs" => $programs,
      "galleries" => $galleries,
      "years" => $years,
      "dates" => $dates,
    ]);
  }
}
