<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        $histories = History::all();
        $galleries = Gallery::all();

        return view("pages.history", [
            "histories" => $histories,
            "galleries" => $galleries,
        ]);
    }
}
