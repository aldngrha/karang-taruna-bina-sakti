<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProgramRequest;
use App\Models\Program;
use App\Models\ProgramYear;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $items = Program::with(["program_year"])->get();

    return view("pages.admin.program.index", [
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
    $program_years = ProgramYear::all();
    return view("pages.admin.program.create", [
      "program_years" => $program_years,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ProgramRequest $request)
  {
    $data = $request->all();

    Program::create($data);
    return redirect()->route("program.index");
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
    $item = Program::findOrFail($id);
    $program_years = ProgramYear::all();
    return view("pages.admin.program.edit", [
      "item" => $item,
      "program_years" => $program_years,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(ProgramRequest $request, $id)
  {
    $data = $request->all();

    $item = Program::findOrFail($id);
    $item->update($data);

    return redirect()->route("program.index");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $item = Program::findOrFail($id);
    $item->delete();

    return redirect()->route("program.index");
  }
}
