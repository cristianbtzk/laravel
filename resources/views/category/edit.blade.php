@extends('category.layout')

@section('title','Editar Categoria')

@section('content')
<div class="col p-3 ">

  <form action="{{ route('category.update',$category->id) }}" method="post">

    @method("PATCH")
    @csrf

    @include('category.form')

  </form>
</div>
@endsection