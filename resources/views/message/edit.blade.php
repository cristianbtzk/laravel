@extends('message.layout')

@section('title','Editar Serviço')

@section('content')
    <form action="{{ route('message.update',$message->id) }}" method="post">
        
        @method("PATCH")
        @csrf
        
        @include('message.form')

    </form>
@endsection