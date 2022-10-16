<label for="id">ID</label>
<input type="text" name="id" id="id" 
value="@if (isset($user)) {{ $user->id}} @endif" disabled><br>

<label>Nome</label>
<input name="name" type='text' value="@if (isset($user)) {{$user->name}} @endif"><br>
<label>Email</label>
<input type='text' name="email" value="@if (isset($user)) {{$user->email}} @endif"><br>
<label>Senha</label>
<input name="password" type='password' value="@if (isset($user)) {{$user->password}} @endif"><br>
<label>CPF</label>
<input name="cpf" type='text' value="@if (isset($user)) {{$user->cpf}} @endif"><br>
<label>CNPJ</label>
<input name="cnpj" type='text' value="@if (isset($user)) {{$user->cnpj}} @endif"><br>
<button type="submit" name="acao" value="salvar"
    id="acao">@if(isset($user)) Alterar @else Salvar @endif
</button>
