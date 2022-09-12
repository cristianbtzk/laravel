@extends('agenda.layout')
@section('title','Detalhes do Usuário')
@section('content')
<?php
foreach (session()->get('users') as  $user) {
?>
    <form action="{{url('agenda', ['id' => $user['id']])}}" method="POST">
        @method('DELETE')

    <?php
    echo $user['id'] . " - " . $user['name'] . " - " . $user['phone'] . " - " . $user['email'] . "<br>";

    echo "<button type='submit'>Deletar</button>";
    echo "<a href='agenda/" . $user['id'] . "'>Detalhes</a>";
    echo "</form>";
}
    ?>
@endsection
