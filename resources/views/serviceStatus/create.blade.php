@extends('serviceStatus.layout')

@section('title','Detalhes do Usuário')

@section('content')
<form action="{{route('serviceStatus.store')}}" method="POST">
    @method("POST")
    @csrf

    @include('serviceStatus.form')

</form>
@endsection
