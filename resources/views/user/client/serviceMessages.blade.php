@extends('user.client.layout')
@section('title','Estados')
@section('content')
<div class="col p-3 d-flex flex-column">
  <div class="mt-4 h-100 d-flex flex-column w-100 p-4 bg-light shadow-lg">
    <table class="table table-striped">
      <thead>
        <tr>
          <td><b>Usuário</b></td>
          <td><b>Email</b></td>
          <td><b>Ações</b></td>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a href="{{route('message.getByServiceUser', ['serviceId' => $serviceId, 'userId' => $user->id])}}"><button class="btn btn-primary">Ver mensagens</button></a>

          </td>


        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
  @endsection