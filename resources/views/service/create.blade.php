@extends('user.client.layout')

@section('title','Detalhes do Serviço')

@section('content')
<div class="col p-3 d-flex flex-column">

  <div class="mt-4 h-100 d-flex flex-column w-100 p-4 bg-light shadow-lg">
    <form action="{{route('service.store')}}" method="POST">
      @method("POST")
      @csrf
      <h1>Novo serviço</h1>
      <div class="mb-3">
        <label for="title" class="form-label">Título:</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrição:</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Data inicial:</label>
        <input name="min_date" type='date' value="@if (isset($service)) {{$service->min_date}} @endif"><br>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Data final:</label>
        <input name="max_date" type='date' value="@if (isset($service)) {{$service->max_date}} @endif"><br>
      </div>
      <div class="mb-3">
        <label for="category_id" class="form-label">Categoria:</label>
        <select name="category_id" class="d-block">
          <option disabled selected hidden>Selecione uma categoria</option>
          @foreach($categories as $category)
          <option value="{{$category->id}}">
            {{$category->title}}
          </option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Adicionar novo serviço</button>
    </form>
  </div>
</div>
@endsection