<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('agenda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session(['user' => null]);
        return view('agenda.create');

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

        $id = rand();
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $new = array(
            'id' => $id,
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
        );
        session()->push('users', $new);
        /* session(['name' => $name]);
        session(['phone' => $phone]);
        session(['email' => $email]); */
        return view('agenda.index');
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
        $agenda = array_values(array_filter(session()->get('users'), function ($user) use($id) {
            return $user['id'] == $id;
        }))[0];
        session(['user' => $agenda]);

        return view('agenda.show')->with('agenda', $agenda);
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
        $agenda = array_values(array_filter(session()->get('users'), function ($user) use($id) {
            return $user['id'] == $id;
        }))[0];
        session(['user' => $agenda]);
        return view('agenda.edit')->with('agenda', $agenda);

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
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        session(['users' => array_map(function ($user) use($id, $name, $phone, $email) {
            if($user['id'] != $id) return $user;
            return array(
                'id' => $id,
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
            );
        }, session()->get('users'))]);
        return view('agenda.index');
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
        session(['users' => array_filter(session()->get('users'), function ($user) use($id) {
            return $user['id'] != $id;
        })]);
        return redirect()->route('agenda.index');

        //
    }
}
