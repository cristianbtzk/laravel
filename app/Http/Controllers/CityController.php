<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = City::all();

    return view("city.index")->with('cities', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view("city.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    City::create($request->all());
    return redirect()->route('city.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\City  $city
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $data = City::find($id);
    return view('city.show')->with('city', $data);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\City  $city
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data = City::find($id);
    return view('city.edit')->with('city', $data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\City  $city
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    City::find($id)->update($request->all());
    return redirect()->route('city.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\City  $city
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    City::destroy($id);
    return redirect()->route('city.index');
  }
}
