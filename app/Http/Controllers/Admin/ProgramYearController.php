<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProgramYearRequest;
use App\Models\ProgramYear;
use Illuminate\Http\Request;

class ProgramYearController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $items = ProgramYear::all();

    return view("pages.admin.program-year.index", [
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
    return view("pages.admin.program-year.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ProgramYearRequest $request)
  {
    $data = $request->all();
    $data["slug"] = Str::slug($request->year);

    ProgramYear::create($data);
    return redirect()->route("program-year.index");
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
    $item = ProgramYear::findOrFail($id);

    return view("pages.admin.program-year.edit", [
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
  public function update(ProgramYearRequest $request, $id)
  {
    $data = $request->all();
    $data["slug"] = Str::slug($request->year);

    $item = ProgramYear::findOrFail($id);
    $item->update($data);

    return redirect()->route("program-year.index");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $item = ProgramYear::findOrFail($id);
    $item->delete();

    return redirect()->route("program-year.index");
  }
}
