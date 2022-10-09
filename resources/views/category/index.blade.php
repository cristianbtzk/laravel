@extends('category.layout')
@section('title','Categorias')
@section('content')
<table>
<tr><td><b>ID</b></td>
    <td><b>Nome</b></td>
    <td><b>Descrição</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($categories as $category) 
        <tr><td>{{ $category->id }}</td>
        <td>{{ $category->title }}</td>
        <td>{{ $category->description }}</td>
        
        <td><a href="{{ route('category.show',$category->id) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('category.edit',$category->id) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('category.destroy',$category->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
@endsection