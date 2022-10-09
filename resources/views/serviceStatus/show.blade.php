@extends('serviceStatus.layout')

@section('title','Detalhes da categoria')

@section('content')
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="{{ $serviceStatus->id }}" disabled><br>
        <label for="telefone">Descrição</label>
        <input type="text" name="description" id="description" value="{{ $serviceStatus->description }}" disabled><br>
        
        <a href="{{ route('serviceStatus.edit',$serviceStatus->id) }}"><button>Editar</button></a></td>
@endsection