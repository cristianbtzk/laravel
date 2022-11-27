@extends('serviceStatus.layout')
@section('title','Status de serviço')
@section('content')
<form action="{{ route('serviceStatus.index')}}" method="get">
  <div class="row">
    <div class="col-3">
      <input type="text" name="description" id="description">
    </div>
    <div class="col-3">
      <button type="submit">Pesquisar</button>
    </div>
  </div>
</form>
<table>
<tr><td><b>ID</b></td>
    <td><b>Descrição</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($serviceStatus as $serviceStatusC) 
        <tr><td>{{ $serviceStatusC->id }}</td>
        <td>{{ $serviceStatusC->description }}</td>
        
        <td><a href="{{ route('serviceStatus.show',$serviceStatusC->id) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('serviceStatus.edit',$serviceStatusC->id) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('serviceStatus.destroy',$serviceStatusC->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
{{$serviceStatus->appends(array('description' => $description))->links()}}
@endsection