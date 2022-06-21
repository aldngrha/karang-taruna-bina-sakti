<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $programs = Program::all();
        $galleries = Gallery::all();

        return view("pages.program", [
            "programs" => $programs,
            "galleries" => $galleries,
        ]);
    }
}
