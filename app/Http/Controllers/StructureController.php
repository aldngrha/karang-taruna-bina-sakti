<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\OrganizationalStructure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index(Request $request)
    {
        $structures = OrganizationalStructure::all();
        $galleries = Gallery::all();

        return view("pages.structure", [
            "structures" => $structures,
            "galleries" => $galleries,
        ]);
    }
}
