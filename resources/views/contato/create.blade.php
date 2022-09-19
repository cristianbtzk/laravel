@extends('agenda.layout')

@section('title','Detalhes do Usuário')

@section('content')
<form action="{{route('contato.store')}}" method="POST">
    @method("POST")
    @csrf

    @component('contato.form')@endcomponent

</form>
@endsection
