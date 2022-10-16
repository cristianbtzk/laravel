@extends('city.layout')

@section('title','Editar Categoria')

@section('content')
    <form action="{{ route('city.update',$city->id) }}" method="post">
        
        @method("PATCH")
        @csrf
        
        @include('city.form')

    </form>
@endsection