@extends('userCity.layout')

@section('title','Detalhes do Usuário')

@section('content')
<form action="{{route('userCity.store')}}" method="POST">
    @method("POST")
    @csrf

    @include('userCity.form')

</form>
@endsection
