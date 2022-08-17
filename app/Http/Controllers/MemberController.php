<?php

namespace App\Http\Controllers;

use App\Models\AgendaYear;
use App\Models\Gallery;
use App\Models\ProgramYear;
use Illuminate\Http\Request;

class MemberController extends Controller
{
  public function index(Request $request)
  {
    $galleries = Gallery::all();
    $years = AgendaYear::all()->sortBy("year");
    $dates = ProgramYear::all()->sortBy("year");

    return view("pages.member", [
      "galleries" => $galleries,
      "years" => $years,
      "dates" => $dates,
    ]);
  }
}
