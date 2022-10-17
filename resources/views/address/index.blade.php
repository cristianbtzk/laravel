@extends('address.layout')
@section('title','Estados')
@section('content')
<table>
<tr><td><b>ID</b></td>
    <td><b>Cidade</b></td>
    <td><b>CEP</b></td>
    <td><b>Bairro</b></td>
    <td><b>Rua</b></td>
    <td><b>Número</b></td>
    <td><b>Usuário</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($addresses as $address) 
        <tr><td>{{ $address->id }}</td>
        <td>{{ $address->city_id }}</td>
        <td>{{ $address->postal_code }}</td>
        <td>{{ $address->district }}</td>
        <td>{{ $address->street }}</td>
        <td>{{ $address->house_number }}</td>
        <td>{{ $address->user_id }}</td>
        
        <td><a href="{{ route('address.show',$address->user_id) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('address.edit',$address->user_id) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('address.destroy',$address->user_id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
@endsection