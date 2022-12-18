<div class="mb-3">
  <label for="id" class="form-label">ID:</label>
  <input type="text" class="form-control" id="id" name="id" value="@if (isset($category)) {{ $category->id}} @endif" disabled>
</div>
<div class="mb-3">
  <label for="title" class="form-label">Título:</label>
  <input type="text" class="form-control" id="title" name="title" value="@if (isset($category)) {{$category->title}} @endif">
</div>
<div class="mb-3">
  <label for="description" class="form-label">Descrição:</label>
  <input type="text" class="form-control" id="description" name="description" value="@if (isset($category)) {{$category->description}} @endif">
</div>


<button type="submit" class="btn btn-primary mt-3" name="acao" value="salvar" id="acao">@if(isset($category)) Alterar @else Salvar @endif
</button>