@extends('category.layout')
@section('title','Categorias')
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
    <td><b>Descrição</b></td>
    
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>

      @foreach ($categories as $category) 
        <tr><td>{{ $category->id }}</td>
        <td>{{ $category->title }}</td>
        <td>{{ $category->title }}</td>
        
        <td><a href="{{ route('category.show',$category->id) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('category.edit',$category->id) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('category.destroy',$category->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach

</table>
{{$categories->appends(array('title' => $title))->links()}}
@endsection