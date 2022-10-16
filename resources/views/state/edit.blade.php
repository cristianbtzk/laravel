@extends('state.layout')

@section('title','Editar Categoria')

@section('content')
    <form action="{{ route('state.update',$state->id) }}" method="post">
        
        @method("PATCH")
        @csrf
        
        @include('state.form')

    </form>
@endsection