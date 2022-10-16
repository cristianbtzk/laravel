@extends('serviceStatus.layout')
@section('title','Status de serviço')
@section('content')
<table>
<tr><td><b>ID</b></td>
    <td><b>Descrição</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($serviceStatus as $serviceStatus) 
        <tr><td>{{ $serviceStatus->id }}</td>
        <td>{{ $serviceStatus->description }}</td>
        
        <td><a href="{{ route('serviceStatus.show',$serviceStatus->id) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('serviceStatus.edit',$serviceStatus->id) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('serviceStatus.destroy',$serviceStatus->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
@endsection