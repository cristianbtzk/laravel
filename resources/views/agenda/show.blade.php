<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{url('agenda', ['id' => $agenda['id']])}}" method="POST">
        @method("PUT")
        <label>Nome</label>
        <input name="name" type='text' value=<?php echo $agenda['name'] ?> ><br>
        <label >Fone</label>
        <input type='text' name="phone" value=<?php echo $agenda['phone'] ?>/><br>
        <label>Email</label>
        <input name="email" type='email' value=<?php echo $agenda['email'] ?> ><br>
        <button type='submit'>Submit</button>
    </form>

</body>

</html>
