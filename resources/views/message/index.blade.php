@extends('message.layout')
@section('title','Estados')
@section('content')
<form action="{{ route('message.index')}}" method="get">
  <div class="row">
    <div class="col-3">
      <input type="text" name="text" id="text">
    </div>
    <div class="col-3">
      <button type="submit">Pesquisar</button>
    </div>
  </div>
</form>
<table>
<tr><td><b>ID</b></td>
    <td><b>Data</b></td>
    <td><b>Mensagem</b></td>
    <td><b>De</b></td>
    <td><b>Para</b></td>
    <td><b>Serviço</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($messages as $message) 
        <tr><td>{{ $message->id }}</td>
        <td>{{ $message->date }}</td>
        <td>{{ $message->text }}</td>
        <td>{{ $message->from_id }}</td>
        <td>{{ $message->to_id }}</td>
        <td>{{ $message->service_id }}</td>
        
        <td><a href="{{ route('message.show',$message->id) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('message.edit',$message->id) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('message.destroy',$message->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
{{$messages->appends(array('text' => $text))->links()}}
@endsection