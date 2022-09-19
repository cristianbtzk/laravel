@extends('agenda.layout')
@section('title','Detalhes do Usuário')
@section('content')
<?php
if ($contatos) {
    foreach ($contatos as  $user) {
?>
        <form action="{{url('contato', ['id' => $user['id']])}}" method="POST">
            @method('DELETE')

    <?php
        echo $user['id'] . " - " . $user['name'] . " - " . $user['phone'] . " - " . $user['email'] . "<br>";

        echo "<button type='submit'>Deletar</button>";
        echo "<a href='contato/" . $user['id'] . "'>Detalhes</a>";
        echo "</form>";
    }
}
?>
@endsection