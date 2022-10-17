@extends('userCity.layout')

@section('title','Editar Categoria')

@section('content')
    <form action="{{ route('userCity.update',$userCity->id) }}" method="post">
        
        @method("PATCH")
        @csrf
        
        @include('userCity.form')

    </form>
@endsection