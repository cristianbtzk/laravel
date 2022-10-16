@extends('user.layout')

@section('title','Detalhes do Usuário')

@section('content')
<form action="{{route('user.store')}}" method="POST">
    @method("POST")
    @csrf

    @include('user.form')

</form>
@endsection
