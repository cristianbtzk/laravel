@extends('userCity.layout')

@section('title','Detalhes da categoria')

@section('content')
<label>Usuário</label>
<input type='text' name="user_id" value="@if (isset($userCity)) {{$userCity->user_id}} @endif"><br>
<label>Cidade</label>
<input type='text' name="city_id" value="@if (isset($userCity)) {{$userCity->city_id}} @endif"><br>

@endsection