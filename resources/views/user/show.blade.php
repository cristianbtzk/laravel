@extends('user.layout')

@section('title','Detalhes da categoria')

@section('content')
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="{{ $user->id }}" disabled><br>
        <label for="title">Nome</label>
        <input type="text" name="name" id="title" value="{{ $user->name }}" disabled><br>
        <label>Email</label>
      <input type='text' name="email" value="@if (isset($user)) {{$user->email}} @endif"><br>
      <label>Senha</label>
      <input name="password" type='password' value="@if (isset($user)) {{$user->password}} @endif"><br>
      <label>CPF</label>
      <input name="cpf" type='text' value="@if (isset($user)) {{$user->cpf}} @endif"><br>
      <label>CNPJ</label>
      <input name="cnpj" type='text' value="@if (isset($user)) {{$user->cnpj}} @endif"><br>
        
        <a href="{{ route('user.edit',$user->id) }}"><button>Editar</button></a></td>
@endsection