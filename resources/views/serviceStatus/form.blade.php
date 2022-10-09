<label for="id">ID</label>
<input type="text" name="id" id="id" 
value="@if (isset($serviceStatus)) {{ $serviceStatus->id}} @endif" disabled><br>

<label>Descrição</label>
<input type='text' name="description" value="@if (isset($serviceStatus)) {{$serviceStatus->description}} @endif"><br>

<button type="submit" name="acao" value="salvar"
    id="acao">@if(isset($serviceStatus)) Alterar @else Salvar @endif
</button>
