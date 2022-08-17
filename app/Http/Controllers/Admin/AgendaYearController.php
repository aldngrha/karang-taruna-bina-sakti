<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AgendaYearRequest;
use App\Models\AgendaYear;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AgendaYearController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $items = AgendaYear::all();

    return view("pages.admin.agenda-year.index", [
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
    return view("pages.admin.agenda-year.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(AgendaYearRequest $request)
  {
    $data = $request->all();
    $data["slug"] = Str::slug($request->year);

    AgendaYear::create($data);
    return redirect()->route("agenda-year.index");
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
    $item = AgendaYear::findOrFail($id);

    return view("pages.admin.agenda-year.edit", [
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
  public function update(AgendaYearRequest $request, $id)
  {
    $data = $request->all();
    $data["slug"] = Str::slug($request->year);

    $item = AgendaYear::findOrFail($id);
    $item->update($data);

    return redirect()->route("agenda-year.index");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $item = AgendaYear::findOrFail($id);
    $item->delete();

    return redirect()->route("agenda-year.index");
  }
}
