<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.sign");
    }
}
