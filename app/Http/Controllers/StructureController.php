<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.structure");
    }
}
