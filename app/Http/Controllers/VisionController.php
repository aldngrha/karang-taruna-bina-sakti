<?php

namespace App\Http\Controllers;

use App\Models\AgendaYear;
use App\Models\Gallery;
use App\Models\ProgramYear;
use App\Models\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{
  public function index(Request $request)
  {
    $visions = Vision::all();
    $galleries = Gallery::all();
    $years = AgendaYear::all()->sortBy("year");
    $dates = ProgramYear::all()->sortBy("year");

    return view("pages.vision", [
      "visions" => $visions,
      "galleries" => $galleries,
      "years" => $years,
      "dates" => $dates,
    ]);
  }
}
