<label>Nome</label>

<input name="name" type='text' value="@if (session()->get('user')) {{session()->get('user')['name']}} @endif"><br>
<label>Fone</label>
<input type='text' name="phone" value="@if (session()->get('user')) {{session()->get('user')['phone']}} @endif"><br>
<label>Email</label>
<input name="email" type='email' value="@if (session()->get('user')) {{session()->get('user')['email']}} @endif"><br>
<button type='submit'>Submit</button>
