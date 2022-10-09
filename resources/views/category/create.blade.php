@extends('category.layout')

@section('title','Detalhes do Usuário')

@section('content')
<form action="{{route('category.store')}}" method="POST">
    @method("POST")
    @csrf

    @include('category.form')

</form>
@endsection
