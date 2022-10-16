@extends('service.layout')

@section('title','Detalhes da categoria')

@section('content')
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="{{ $service->id }}" disabled><br>
        <label>Data</label>
        <input name="date" type='date' value="@if (isset($message)) {{$message->date}} @endif"><br>
        <label>Mensagem</label>
        <input type='text' name="text" value="@if (isset($message)) {{$message->text}} @endif"><br>
        <label>De:</label>
        <input name="from_id" type='text' value="@if (isset($message)) {{$message->from_id}} @endif"><br>
        <label>Para:</label>
        <input name="to_id" type='text' value="@if (isset($message)) {{$message->to_id}} @endif"><br>
        <label>Usuário</label>
        <input name="service_id" type='text' value="@if (isset($message)) {{$message->service_id}} @endif"><br>
        <a href="{{ route('service.edit',$service->id) }}"><button>Editar</button></a></td>
@endsection