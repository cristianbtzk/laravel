@extends('city.layout')
@section('title','Estados')
@section('content')
<form action="{{ route('city.index')}}" method="get">
  <div class="row">
    <div class="col-3">
      <input type="text" name="name" id="name">
    </div>
    <div class="col-3">
      <button type="submit">Pesquisar</button>
    </div>
  </div>
</form>
<table>
<tr><td><b>ID</b></td>
    <td><b>Nome</b></td>
    <td><b>Estado</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($cities as $city) 
        <tr><td>{{ $city->id }}</td>
        <td>{{ $city->name }}</td>
        <td>{{ $city->state_id }}</td>
        
        <td><a href="{{ route('city.show',$city->id) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('city.edit',$city->id) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('city.destroy',$city->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
{{$cities->appends(array('name' => $name))->links()}}
@endsection