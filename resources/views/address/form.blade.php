<label>Cidade</label>
<input name="city_id" type='text' value="@if (isset($address)) {{$address->city_id}} @endif"><br>
<label>CEP</label>
<input type='text' name="postal_code" value="@if (isset($address)) {{$address->postal_code}} @endif"><br>
<label>Bairro</label>
<input name="district" type='text' value="@if (isset($address)) {{$address->district}} @endif"><br>
<label>Rua</label>
<input name="street" type='text' value="@if (isset($address)) {{$address->street}} @endif"><br>
<label>Número</label>
<input name="house_number" type='text' value="@if (isset($address)) {{$address->house_number}} @endif"><br>
<label>Usuário</label>
<input name="user_id" type='text' value="@if (isset($address)) {{$address->user_id}} @endif"><br>
<button type="submit" name="acao" value="salvar"
    id="acao">@if(isset($address)) Alterar @else Salvar @endif
</button>
