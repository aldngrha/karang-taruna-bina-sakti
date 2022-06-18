<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OrganizationalStructureRequest;
use App\Models\OrganizationalStructure;
use Illuminate\Http\Request;

class OrganizationalStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = OrganizationalStructure::all();

        return view("pages.admin.structure.index", [
            "items" => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.admin.structure.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganizationalStructureRequest $request)
    {
        $data = $request->all();
        $data["image"] = $request
            ->file("image")
            ->store("assets/structure", "public");

        OrganizationalStructure::create($data);
        return redirect()->route("structure.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = OrganizationalStructure::findOrFail($id);

        return view("pages.admin.structure.edit", [
            "item" => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrganizationalStructureRequest $request, $id)
    {
        $data = $request->all();

        $item = OrganizationalStructure::findOrFail($id);
        $data["image"] = $request
            ->file("image")
            ->store("assets/structure", "public");

        $item->update($data);

        return redirect()->route("structure.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = OrganizationalStructure::findOrFail($id);
        $item->delete();

        return redirect()->route("structure.index");
    }
}
