<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\State;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view("user.provider.index");
  }

  public function profile()
  {
    $user = session()->get('user');
    $user['cities'] = $user->cities()->get();

    $states = State::all();
    return view("user.provider.profile")->with('user', $user)->with('states', $states);

    return response()->json($user);
  }

  public function addCity()
  {
    $user = session()->get('user');
    $cityId = request()->input('city_id');
    $user->cities()->attach($cityId);

    return redirect()->route('provider.profile');
  }

  public function availableServices(Request $request)
  {
    $cities = session()->get('user')->cities()->get()->pluck('id');

    $services = Service::where('service_status_id', '=', 1)->whereHas('user.address', function($query) use($cities) {
      $query->whereIn('city_id', $cities);
    })->get();

    //return response()->json($services);
    //return response()->json($services[0]->serviceStatus()->get());
    return view("user.provider.availableServices")->with('services', $services);
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
