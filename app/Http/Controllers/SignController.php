<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class SignController extends Controller
{
    public function index(Request $request)
    {
        $galleries = Gallery::all();

        return view("pages.sign", [
            "galleries" => $galleries,
        ]);
    }
}
