@extends('user.layout')

@section('title','Editar Usuário')

@section('content')
    <form action="{{ route('user.update',$user->id) }}" method="post">
        
        @method("PATCH")
        @csrf
        
        @include('user.form')

    </form>
@endsection