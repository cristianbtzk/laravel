@extends('category.layout')
@section('title','Categorias')
@section('content')
<div class="col p-3 d-flex flex-column">
  <div class="mt-4 h-100 d-flex flex-column w-100 p-4 bg-light shadow-lg">

    <form action="{{ route('category.index')}}" method="get">
      <div class="row">
        <div class="col-3">
          <label for="title" class="form-label">Buscar por categoria: </label>
          <input type="text" value="{{$title}}" name="title" id="title" class="form-control">
          <button class="btn btn-primary mt-2" type="submit">Pesquisar</button>
        </div>
      </div>
    </form>

    <table class="table table-striped table-active">
      <thead>
        <tr>
          <td><b>ID</b></td>
          <td><b>Nome</b></td>
          <td><b>Descrição</b></td>

          <td><b>Detalhes</b></td>
          <td><b>Alterar</b></td>
          <td><b>Excluir</b></td>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
          <td>{{ $category->id }}</td>
          <td>{{ $category->title }}</td>
          <td>{{ $category->description }}</td>

          <td><a href=" {{ route('category.show',$category->id) }}"><button class="btn btn-primary">Detalhes</button></a></td>
          <td><a href="{{ route('category.edit',$category->id) }}"><button class="btn btn-primary">Editar</button></a></td>
          <td>
            <form id="form_delete" name="form_delete" action="{{ route('category.destroy',$category->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$categories->appends(array('title' => $title))->links()}}
  </div>
</div>

@endsection