<label for="id">ID</label>
<input type="text" name="id" id="id" 
value="@if (isset($city)) {{ $city->id}} @endif" disabled><br>

<label>Nome</label>
<input name="name" type='text' value="@if (isset($city)) {{$city->name}} @endif"><br>
<label>Estado</label>
<input type='text' name="state_id" value="@if (isset($city)) {{$city->state_id}} @endif"><br>

<button type="submit" name="acao" value="salvar"
    id="acao">@if(isset($city)) Alterar @else Salvar @endif
</button>
