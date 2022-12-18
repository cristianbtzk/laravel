<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function auth(Request $request)
  {
    $email = $request->input('email');
    $password = sha1($request->input('password'));

    $user = User::where('email', '=', $email)
      ->where('password', '=', $password)->first();

    $user['role'] = $user->roles()->first();

    session(['user' => $user]);

    switch ($user->role->id) {
      case 2:
        return redirect()->route('client.index');
        break;

      case 3:
        return redirect()->route('provider.index');
        break;

      default:
        # code...
        break;
    }

    //return response()->json(session()->get('user'));

    
  }


  public function index()
  {
    $data = User::all();

    return view("user.index")->with('users', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $roles = Role::where('id', '>', 1)->get();

    return view("user.create")->with('roles', $roles);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
    $cpf = $request->input('cpf');
    $cnpj = $request->input('cnpj');
    $role = $request->input('role_id');
    $is_active = true;

    $user = new User();
    $user->name = $name;
    $user->email = $email;
    $user->password = sha1($password);
    $user->cpf = $cpf;
    $user->cnpj = $cnpj;
    $user->is_active = $is_active;
    $user->save();

    $user->roles()->attach($role);

    return redirect()->route('login');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $data = User::find($id);
    return view('user.show')->with('user', $data);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data = User::find($id);
    return view('user.edit')->with('user', $data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    User::find($id)->update($request->all());
    return redirect()->route('user.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    User::destroy($id);
    return redirect()->route('user.index');
  }
}
