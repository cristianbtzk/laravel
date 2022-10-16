@extends('state.layout')
@section('title','Estados')
@section('content')
<table>
<tr><td><b>ID</b></td>
    <td><b>Nome</b></td>
    <td><b>Abreviação</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($states as $state) 
        <tr><td>{{ $state->id }}</td>
        <td>{{ $state->name }}</td>
        <td>{{ $state->abbreviation }}</td>
        
        <td><a href="{{ route('state.show',$state->id) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('state.edit',$state->id) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('state.destroy',$state->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
@endsection