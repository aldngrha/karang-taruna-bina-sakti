<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $items = Article::all();
        return view("pages.admin.dashboard", [
            "items" => $items,
        ]);
    }
}
