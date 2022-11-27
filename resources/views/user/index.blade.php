@extends('user.layout')
@section('title','Estados')
@section('content')
<form action="{{ route('category.index')}}" method="get">
  <div class="row">
    <div class="col-3">
      <input type="text" name="title" id="title">
    </div>
    <div class="col-3">
      <button type="submit">Pesquisar</button>
    </div>
  </div>
</form>
<table>
<tr><td><b>ID</b></td>
    <td><b>Nome</b></td>
    <td><b>Email</b></td>
    <td><b>CPF</b></td>
    <td><b>CNPJ</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($users as $user) 
        <tr><td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->cpf }}</td>
        <td>{{ $user->cnpj }}</td>
        
        <td><a href="{{ route('user.show',$user->id) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('user.edit',$user->id) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('user.destroy',$user->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
@endsection