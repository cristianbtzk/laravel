<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    foreach (session()->get('users') as  $user) {
    ?>
        <form action="{{url('agenda', ['id' => $user['id']])}}" method="POST">
            @method('DELETE')

        <?php
        echo $user['id'] . " - " . $user['name'] . " - " . $user['phone'] . " - " . $user['email'] . "<br>";

        echo "<button type='submit'>Deletar</button>";
        echo "<a href='" . $user['id'] . "'>Detalhes</a>";
        echo "</form>";
    }
        ?>

</body>

</html>
