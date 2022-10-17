@extends('address.layout')

@section('title','Editar Usuário')

@section('content')
    <form action="{{ route('address.update',$address->user_id) }}" method="post">
        
        @method("PATCH")
        @csrf
        
        @include('address.form')

    </form>
@endsection