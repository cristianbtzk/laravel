@extends('user.layout')

@section('title','Detalhes do Usuário')

@section('content')
<div class="h-100 container d-flex align-items-center justify-content-center">
    <div class="container rounded shadow-lg w-50 p-5" style="background-color: #fff;">
        <form action="{{ route('user.store') }}" method="POST">
            @method("POST")
            <h1>Novo usuário</h1>
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Perfil:</label>
                <select class="d-block" name="role_id" id="role">
                    @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->description}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
            </div>
            <div class="mb-3">
                <label for="cnpj" class="form-label">CNPJ:</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj">
            </div>
            <button type="submit" class="btn btn-primary">Criar usuário</button>
        </form>
    </div>
</div>
@endsection