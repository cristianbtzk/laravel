@extends('address.layout')

@section('title','Detalhes do Usuário')

@section('content')
<form action="{{route('address.store')}}" method="POST">
    @method("POST")
    @csrf

    @include('address.form')

</form>
@endsection
