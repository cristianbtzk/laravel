<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $text = request()->input('text');
    $data = Message::where('text', 'LIKE', '%' . $text . '%')
      ->orderBy('text')
      ->paginate(5);

    return view("message.index")->with('messages', $data)->with('text', $text);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view("message.create");
  }

  public function getByService($serviceId)
  {
    $user = session()->get('user');

    $data = Message::where('service_id', '=', $serviceId)->where(function ($query) use ($user) {
      $query->where('to_id', '=', $user->id)->orWhere('from_id', '=', $user->id);
    })->get();
    
    $service = Service::find($serviceId);
    //return response()->json($data);

    switch ($user->role->id) {
      case 3:
        return view("user.provider.message")->with('messages', $data)->with('service', $service);
        break;

      default:
        # code...
        break;
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $user = session()->get('user');

    $text = $request->input('text');
    $service_id = $request->input('service_id');
    $to_id = $request->input('to_id');
    $from_id = $user->id;
    $date = date("Y-m-d H:i:s");  

    $message = new Message();
    $message->text = $text;
    $message->service_id = $service_id;
    $message->to_id = $to_id;
    $message->from_id = $from_id;
    $message->date = $date;
    $message->save();

    return Redirect::back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Message  $message
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $data = Message::find($id);
    return view('message.show')->with('message', $data);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Message  $message
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data = Message::find($id);
    return view('message.edit')->with('message', $data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Message  $message
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    Message::find($id)->update($request->all());
    return redirect()->route('message.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Message  $message
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Message::destroy($id);
    return redirect()->route('message.index');
  }
}
