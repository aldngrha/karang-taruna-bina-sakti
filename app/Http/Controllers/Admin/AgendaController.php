<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AgendaRequest;
use App\Models\Agenda;
use App\Models\AgendaYear;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $items = Agenda::with(["agenda_year"])->get();

    return view("pages.admin.agenda.index", [
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
    $agenda_years = AgendaYear::all();
    return view("pages.admin.agenda.create", [
      "agenda_years" => $agenda_years,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(AgendaRequest $request)
  {
    $data = $request->all();
    $data["image"] = $request->file("image")->store("assets/agenda", "public");

    Agenda::create($data);
    return redirect()->route("agenda.index");
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
    $item = Agenda::findOrFail($id);
    $agenda_years = AgendaYear::all();
    return view("pages.admin.agenda.edit", [
      "item" => $item,
      "agenda_years" => $agenda_years,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(AgendaRequest $request, $id)
  {
    $data = $request->all();

    $item = Agenda::findOrFail($id);
    $data["image"] = $request->file("image")->store("assets/agenda", "public");
    $item->update($data);

    return redirect()->route("agenda.index");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $item = Agenda::findOrFail($id);
    $item->delete();

    return redirect()->route("agenda.index");
  }
}
