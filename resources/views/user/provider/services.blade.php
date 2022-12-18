@extends('user.provider.layout')
@section('title','Estados')
@section('content')
<div class="col p-3 d-flex flex-column">
  <div class="mt-4 h-100 d-flex flex-column w-100 p-4 bg-light shadow-lg">
      <table class="table table-striped">
      <thead>
        <tr>
          <td><b>ID</b></td>
          <td><b>Status</b></td>
          <td><b>Título</b></td>
          <td><b>Categoria</b></td>
          <td><b>Data de início</b></td>
          <td><b>Data final</b></td>
          <td><b>Ações</b></td>
        </tr>
      </thead>
      <tbody>
        @foreach ($services as $service)
        <tr>
          <td>{{ $service->id }}</td>
          <td>{{ $service->serviceStatus->description }}</td>
          <td>{{ $service->title }}</td>
          <td>{{ $service->category->description }}</td>
          <td>{{ $service->min_date }}</td>
          <td>{{ $service->max_date }}</td>

          <td>
            <a href="{{ route('message.getByService',['serviceId' => $service->id]) }}">Enviar mensagem</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

</div>
@endsection