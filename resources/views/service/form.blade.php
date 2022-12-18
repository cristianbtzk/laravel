<label for="id">ID</label>
<input type="text" name="id" id="id" 
value="@if (isset($service)) {{ $service->id}} @endif" disabled><br>

<label>Título</label>
<input name="title" type='text' value="@if (isset($service)) {{$service->title}} @endif"><br>
<label>Descrição</label>
<input type='text' name="description" value="@if (isset($service)) {{$service->description}} @endif"><br>
<label>Data Inicial</label>
<input name="min_date" type='date' value="@if (isset($service)) {{$service->min_date}} @endif"><br>
<label>Data Final</label>
<input name="max_date" type='date' value="@if (isset($service)) {{$service->max_date}} @endif"><br>
<label>Categoria</label>
<input name="category_id" type='text' value="@if (isset($service)) {{$service->category_id}} @endif"><br>
<button type="submit" name="acao" value="salvar"
    id="acao">@if(isset($service)) Alterar @else Salvar @endif
</button>
