<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Gallery;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $agendas = Agenda::all();
        $galleries = Gallery::all();

        return view("pages.schedule", [
            "agendas" => $agendas,
            "galleries" => $galleries,
        ]);
    }
}
