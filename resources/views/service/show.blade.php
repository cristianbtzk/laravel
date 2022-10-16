@extends('service.layout')

@section('title','Detalhes da categoria')

@section('content')
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="{{ $service->id }}" disabled><br>
        <label>Título</label>
        <input name="title" type='text' value="@if (isset($service)) {{$service->title}} @endif"><br>
        <label>Descrição</label>
        <input type='text' name="description" value="@if (isset($service)) {{$service->description}} @endif"><br>
        <label>Data Inicial</label>
        <input name="min_date" type='date' value="@if (isset($service)) {{$service->min_date}} @endif"><br>
        <label>Data Final</label>
        <input name="max_date" type='date' value="@if (isset($service)) {{$service->max_date}} @endif"><br>
        <label>Usuário</label>
        <input name="user_id" type='text' value="@if (isset($service)) {{$service->user_id}} @endif"><br>
        <label>Status</label>
        <input name="service_status_id" type='text' value="@if (isset($service)) {{$service->service_status_id}} @endif"><br>
        <label>Categoria</label>
        <input name="category_id" type='text' value="@if (isset($service)) {{$service->category_id}} @endif"><br>
        <a href="{{ route('service.edit',$service->id) }}"><button>Editar</button></a></td>
@endsection