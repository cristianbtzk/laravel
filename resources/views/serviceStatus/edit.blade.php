@extends('serviceStatus.layout')

@section('title','Editar Categoria')

@section('content')
    <form action="{{ route('serviceStatus.update',$serviceStatus->id) }}" method="post">
        
        @method("PATCH")
        @csrf
        
        @include('serviceStatus.form')

    </form>
@endsection