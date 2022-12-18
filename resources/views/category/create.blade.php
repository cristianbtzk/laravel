@extends('category.layout')

@section('title','Detalhes do Usuário')

@section('content')
<div class="col p-3 d-flex flex-column">
  <div class="mt-4 h-100 d-flex flex-column w-100 p-4 bg-light shadow-lg">
    <h3>Nova categoria</h3>
    <form action="{{route('category.store')}}" method="POST">
      @method("POST")
      @csrf

      @include('category.form')

    </form>
  </div>
</div>
@endsection