@extends('service.layout')
@section('title','Estados')
@section('content')
<table>
<tr><td><b>ID</b></td>
    <td><b>Título</b></td>
    <td><b>Descrição</b></td>
    <td><b>Data inicial</b></td>
    <td><b>Data Final</b></td>
    <td><b>Usuário</b></td>
    <td><b>Status</b></td>
    <td><b>Categoria</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($services as $service)
        <tr><td>{{ $service->id }}</td>
        <td>{{ $service->title }}</td>
        <td>{{ $service->description }}</td>
        <td>{{ $service->min_date }}</td>
        <td>{{ $service->max_date }}</td>
        <td>{{ $service->user->name }}</td>
        <td>{{ $service->service_status_id }}</td>
        <td>{{ $service->category->title }}</td>
        
        <td><a href="{{ route('service.show',$service->id) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('service.edit',$service->id) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('service.destroy',$service->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
@endsection