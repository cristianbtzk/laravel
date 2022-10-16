@extends('service.layout')

@section('title','Editar Serviço')

@section('content')
    <form action="{{ route('service.update',$service->id) }}" method="post">
        
        @method("PATCH")
        @csrf
        
        @include('service.form')

    </form>
@endsection