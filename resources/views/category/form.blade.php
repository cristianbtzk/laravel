<label for="id">ID</label>
<input type="text" name="id" id="id" 
value="@if (isset($category)) {{ $category->id}} @endif" disabled><br>

<label>Título</label>
<input name="title" type='text' value="@if (isset($category)) {{$category->title}} @endif"><br>
<label>Descrição</label>
<input type='text' name="description" value="@if (isset($category)) {{$category->description}} @endif"><br>

<button type="submit" name="acao" value="salvar"
    id="acao">@if(isset($category)) Alterar @else Salvar @endif
</button>
