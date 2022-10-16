@extends('state.layout')

@section('title','Detalhes da categoria')

@section('content')
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="{{ $state->id }}" disabled><br>
        <label for="title">Nome</label>
        <input type="text" name="name" id="title" value="{{ $state->name }}" disabled><br>
        <label for="telefone">Sigla</label>
        <input type="text" name="abbreviation" id="abbreviation" value="{{ $state->abbreviation }}" disabled><br>
        
        <a href="{{ route('state.edit',$state->id) }}"><button>Editar</button></a></td>
@endsection