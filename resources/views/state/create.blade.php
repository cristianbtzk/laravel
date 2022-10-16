@extends('state.layout')

@section('title','Detalhes do Usuário')

@section('content')
<form action="{{route('state.store')}}" method="POST">
    @method("POST")
    @csrf

    @include('state.form')

</form>
@endsection
