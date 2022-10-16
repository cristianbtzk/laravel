@extends('city.layout')

@section('title','Detalhes da categoria')

@section('content')
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="{{ $city->id }}" disabled><br>
        <label for="title">Nome</label>
        <input type="text" name="name" id="title" value="{{ $city->name }}" disabled><br>
        <label for="telefone">Estado</label>
        <input type="text" name="abbreviation" id="abbreviation" value="{{ $city->state_id }}" disabled><br>
        
        <a href="{{ route('city.edit',$city->id) }}"><button>Editar</button></a></td>
@endsection