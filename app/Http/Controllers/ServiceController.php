<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $description = request()->input('description');
    $data = Service::where('description', 'LIKE', '%' . $description . '%')
      ->orderBy('description')
      ->paginate(5);

    return view("service.index")->with('services', $data)->with('description', $description);
  }

  public function getByMessage()
  {
    $user = session()->get('user');

    $data = Service::whereHas('messages', function($query) use($user) {
      $query->where('from_id', $user->id);
    })->get();
  

    return view("user.provider.services")->with('services', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categories = Category::all();
    return view("service.create")->with('categories', $categories);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $newService = array(
      'user_id' => session()->get('user')->id,
      'title' => $request->input('title'),
      'description' => $request->input('description'),
      'min_date' => $request->input('min_date'),
      'max_date' => $request->input('max_date'),
      'category_id' => $request->input('category_id'),
      'service_status_id' =>  1,
    );
    Service::create($newService);
    return redirect()->route('client.services');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Service  $service
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $data = Service::find($id);
    return view('service.show')->with('service', $data);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Service  $service
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data = Service::find($id);
    return view('service.edit')->with('service', $data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Service  $service
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    Service::find($id)->update($request->all());
    return redirect()->route('service.index');
  }

  public function finish(Request $request, $id)
  {
    Service::find($id)->update(array('service_status_id' => 3));
    return Redirect::back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Service  $service
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Service::destroy($id);
    return redirect()->route('client.services');
  }
}
