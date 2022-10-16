@extends('service.layout')

@section('title','Detalhes do Serviço')

@section('content')
<form action="{{route('service.store')}}" method="POST">
    @method("POST")
    @csrf

    @include('service.form')

</form>
@endsection
