<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('agenda.store')}}" method="POST">
        @method("POST")
        <label>Nome</label>
        <input name="name" type='text' /><br>
        <label  >Fone</label>
        <input type='text' name="phone" /><br>
        <label>Email</label>
        <input name="email"  type='email' /><br>
        <button type='submit'>Submit</button>
    </form>
</body>

</html>
