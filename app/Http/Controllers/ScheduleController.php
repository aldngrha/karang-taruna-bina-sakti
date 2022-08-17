<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\AgendaYear;
use App\Models\Gallery;
use App\Models\Program;
use App\Models\ProgramYear;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
  public function index(Request $request, $slug)
  {
    $galleries = Gallery::all();
    $items = AgendaYear::with(["agendas"])
      ->where("slug", $slug)
      ->firstOrFail();
    $years = AgendaYear::all()->sortBy("year");
    $programs = Program::with(["program_year"])->get();
    $dates = ProgramYear::all()->sortBy("year");

    return view("pages.schedule", [
      "galleries" => $galleries,
      "items" => $items,
      "years" => $years,
      "programs" => $programs,
      "dates" => $dates,
    ]);
  }
}
