@extends('user.provider.layout')
@section('title','Estados')
@section('content')
<div class="col p-3 d-flex flex-column">
  <div class="mt-4 h-100 d-flex flex-column w-100 p-4 bg-light shadow-lg">
    <table class="table table-striped">
      <thead>
        <tr>
          <td><b>ID</b></td>
          <td><b>Data</b></td>
          <td><b>Texto</b></td>
          <td><b>De</b></td>
          <td><b>Para</b></td>
        </tr>
      </thead>
      <tbody>
        @foreach ($messages as $message)
        <tr>
          <td>{{ $message->id }}</td>
          <td>{{ $message->date }}</td>
          <td>{{ $message->text }}</td>
          <td>{{ $message->from->name }}</td>
          <td>{{ $message->to->name }}</td>


        </tr>
        @endforeach
      </tbody>
    </table>

    <h4>Enviar mensagem</h4>

    <form action="{{ route('message.store')}}" method="POST">
      @method("POST")
      <textarea class="d-block" name="text" placeholder="Mensagem"></textarea>
      <input class="d-none" value="{{$service->user_id}}" name="to_id" type="text">
      <input class="d-none" value="{{$service->id}}" name="service_id" type="text">
      <button class="mt-4 btn btn-primary" type="submit">Enviar mensagem</button>
    </form>
  </div>
  @endsection