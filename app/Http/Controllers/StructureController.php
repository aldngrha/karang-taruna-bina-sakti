<?php

namespace App\Http\Controllers;

use App\Models\AgendaYear;
use App\Models\Gallery;
use App\Models\OrganizationalStructure;
use App\Models\ProgramYear;
use Illuminate\Http\Request;

class StructureController extends Controller
{
  public function index(Request $request)
  {
    $structures = OrganizationalStructure::all();
    $galleries = Gallery::all();
    $years = AgendaYear::all()->sortBy("year");
    $dates = ProgramYear::all()->sortBy("year");

    return view("pages.structure", [
      "structures" => $structures,
      "galleries" => $galleries,
      "years" => $years,
      "dates" => $dates,
    ]);
  }
}
