@extends('category.layout')

@section('title','Detalhes da categoria')

@section('content')
<div class="col p-3 ">

  <label for="id">ID</label>
  <input type="text" name="id" id="id" value="{{ $category->id }}" disabled><br>
  <label for="title">Título</label>
  <input type="text" name="title" id="title" value="{{ $category->title }}" disabled><br>
  <label for="telefone">Descrição</label>
  <input type="text" name="description" id="description" value="{{ $category->description }}" disabled><br>

  <a href="{{ route('category.edit',$category->id) }}"><button class="btn btn-primary">Editar</button></a></td>
</div>
@endsection