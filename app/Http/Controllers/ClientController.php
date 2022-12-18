<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Service;
use App\Models\State;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view("user.client.index");
  }

  public function profile()
  {
    $user = session()->get('user');
    $user['address'] = $user->address()->first();

    $states = State::all();
    return view("user.client.profile")->with('user', $user)->with('states', $states);

    return response()->json($user);
  }

  public function setAddress(Request $request)
  {
    $userId = session()->get('user')->id;
    $cityId = $request->input('city_id');
    $houseNumber = $request->input('house_number');
    $street = $request->input('street');
    $postal_code = $request->input('postal_code');
    $district = $request->input('district');
    /* Address::updateOrCreate(['user_id' => $userId], [
      'city_id' => $cityId, 
      'house_number' => $houseNumber,
      'street' => $street,
      'postal_code' => $postal_code,
      'district' => $district,
    ]); */
    $user = session()->get('user');
    $user->address()->updateOrCreate([], [
      'city_id' => $cityId, 
      'house_number' => $houseNumber,
      'street' => $street,
      'postal_code' => $postal_code,
      'district' => $district,
    ]);
    
    return redirect()->route('client.profile');
  }

  public function services(Request $request)
  {
    $services = Service::where('user_id', '=' , session()->get('user')->id)->get();
    //return response()->json($services[0]->serviceStatus()->get());
    return view("user.client.services")->with('services', $services);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
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
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
