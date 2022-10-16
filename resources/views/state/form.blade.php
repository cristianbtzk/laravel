<label for="id">ID</label>
<input type="text" name="id" id="id" 
value="@if (isset($state)) {{ $state->id}} @endif" disabled><br>

<label>Nome</label>
<input name="name" type='text' value="@if (isset($state)) {{$state->name}} @endif"><br>
<label>Abreviação</label>
<input type='text' name="abbreviation" value="@if (isset($state)) {{$state->abbreviation}} @endif"><br>

<button type="submit" name="acao" value="salvar"
    id="acao">@if(isset($state)) Alterar @else Salvar @endif
</button>
