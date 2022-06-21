<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $galleries = Gallery::all();

        return view("pages.member", [
            "galleries" => $galleries,
        ]);
    }
}
