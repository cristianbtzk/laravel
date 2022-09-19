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
        @include('agenda.form')

    </form>

</body>

</html>
