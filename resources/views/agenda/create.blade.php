@extends('agenda.layout')

@section('title','Detalhes do Usuário')

@section('content')
<form action="{{route('agenda.store')}}" method="POST">
    @method("POST")
    @csrf

    @component('agenda.form')@endcomponent

</form>
@endsection
