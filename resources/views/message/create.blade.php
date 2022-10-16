@extends('message.layout')

@section('title','Detalhes do Serviço')

@section('content')
<form action="{{route('message.store')}}" method="POST">
    @method("POST")
    @csrf

    @include('message.form')

</form>
@endsection
