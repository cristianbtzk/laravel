@extends('category.layout')

@section('title','Editar Categoria')

@section('content')
    <form action="{{ route('category.update',$category->id) }}" method="post">
        
        @method("PATCH")
        @csrf
        
        @include('category.form')

    </form>
@endsection