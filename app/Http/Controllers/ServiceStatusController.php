<?php

namespace App\Http\Controllers;

use App\Models\ServiceStatus;
use Illuminate\Http\Request;

class ServiceStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ServiceStatus::all();

        return view("serviceStatus.index")->with('serviceStatus', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("serviceStatus.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      ServiceStatus::create($request->all());
      return redirect()->route('serviceStatus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceStatus  $serviceStatus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = ServiceStatus::find($id);
      return view('serviceStatus.show')->with('serviceStatus', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceStatus  $serviceStatus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = ServiceStatus::find($id);
      return view('serviceStatus.edit')->with('serviceStatus', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceStatus  $serviceStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      ServiceStatus::find($id)->update($request->all());
      return redirect()->route('serviceStatus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceStatus  $serviceStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      ServiceStatus::destroy($id);
      return redirect()->route('serviceStatus.index');
    }
}
