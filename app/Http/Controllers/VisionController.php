<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisionController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.vision");
    }
}
