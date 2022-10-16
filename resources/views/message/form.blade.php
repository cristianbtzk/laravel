<label for="id">ID</label>
<input type="text" name="id" id="id" 
value="@if (isset($message)) {{ $message->id}} @endif" disabled><br>

<label>Data</label>
<input name="date" type='date' value="@if (isset($message)) {{$message->date}} @endif"><br>
<label>Mensagem</label>
<input type='text' name="text" value="@if (isset($message)) {{$message->text}} @endif"><br>
<label>De:</label>
<input name="from_id" type='text' value="@if (isset($message)) {{$message->from_id}} @endif"><br>
<label>Para:</label>
<input name="to_id" type='text' value="@if (isset($message)) {{$message->to_id}} @endif"><br>
<label>Serviço</label>
<input name="service_id" type='text' value="@if (isset($message)) {{$message->service_id}} @endif"><br>
<button type="submit" name="acao" value="salvar"
    id="acao">@if(isset($message)) Alterar @else Salvar @endif
</button>
