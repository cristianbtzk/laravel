@extends('userCity.layout')
@section('title','Status de serviço')
@section('content')
<table>
<tr><td><b>Cidade</b></td>
    <td><b>Usuário</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($userCities as $userCity) 
        <tr><td>{{ $userCity->user_id }}</td>
        <td>{{ $userCity->city_id }}</td>
        
        <td><a href="{{ route('userCity.show',$userCity->user_id, $userCity->city_id) }}"><button>Detalhes</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('userCity.destroy',$userCity->user_id, $userCity->city_id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
@endsection