<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    public function index(Request $request)
    {
        $visions = Vision::all();
        $galleries = Gallery::all();

        return view("pages.vision", [
            "visions" => $visions,
            "galleries" => $galleries,
        ]);
    }
}
