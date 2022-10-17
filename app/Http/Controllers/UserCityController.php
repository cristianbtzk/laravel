<?php

namespace App\Http\Controllers;

use App\Models\User_City;
use Illuminate\Http\Request;

class UserCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User_City::all();

        return view("userCity.index")->with('userCities', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("userCity.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      User_City::create($request->all());
      return redirect()->route('userCity.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_City  $userCity
     * @return \Illuminate\Http\Response
     */
    public function show($user_id, $city_id)
    {
      $data = User_City::where('user_id', $user_id);
      return view('userCity.show')->with('userCity', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_City  $userCity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = User_City::find($id);
      return view('userCity.edit')->with('userCity', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_City  $userCity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      User_City::find($id)->update($request->all());
      return redirect()->route('userCity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_City  $userCity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User_City::destroy($id);
      return redirect()->route('userCity.index');
    }
}
