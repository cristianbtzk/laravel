@extends('city.layout')

@section('title','Detalhes do Usuário')

@section('content')
<form action="{{route('city.store')}}" method="POST">
    @method("POST")
    @csrf

    @include('city.form')

</form>
@endsection
