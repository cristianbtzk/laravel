@extends('user.provider.layout')
@section('title','Estados')
@section('content')
<div class="col p-3 d-flex flex-column">
  <div class="d-flex flex-column w-100 p-4 bg-light shadow-lg">
    <h4 class="text-center">{{ $user->name }}</h4>
    <h6>{{ $user->email }}</h6>
    <p class="mb-0">CPF: {{$user->cpf}}</p>
    <p class="mb-0">CNPJ: {{$user->cnpj}}</p>
  </div>

  <div class="mt-4 h-100 d-flex flex-column w-100 p-4 bg-light shadow-lg">
    <h4 class="text-center">Minhas cidades</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <td><b>ID</b></td>
          <td><b>Nome</b></td>
          <td><b>Estado</b></td>
          <td><b>Excluir</b></td>
        </tr>
      </thead>
      <tbody>
        @foreach ($user->cities as $city)
        <tr>
          <td>{{ $city->id }}</td>
          <td>{{ $city->name }}</td>
          <td>{{ $city->state->name }}</td>

          <td>
            <form id="form_delete" name="form_delete" action="{{ route('category.destroy',$city->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <h3>Adicionar cidade: </h3>

    <p>Selecione o estado</p>

    <select name="state">
      <option disabled selected hidden>Selecione um estado</option>
      @foreach($states as $state)
      <option value="{{$state->id}}">
        {{$state->name}}
      </option>
      @endforeach
    </select>

    <form action="{{ route('provider.addCity')}}" method="post">
      <p class="mt-4 hidden" style="display: none">Selecione a cidade</p>
      <select class="hidden" style="display: none" name="city_id"></select>

      <button class="btn btn-primary hidden mt-4" style="display: none">Adicionar</button>
    </form>
  </div>

</div>
@endsection

@section('script')
<script type="text/javascript">
  $('select[name=state]').change(function() {
    const stateId = $(this).val()

    $.get('/city/state/' + stateId, function(cities) {
      $('select[name=city_id]').empty();
      $.each(cities, function(key, city) {
        $('select[name=city_id]').append(`<option value=${city.id}> ${city.name}</option>`)
      })

    })
    $('.hidden').css('display', 'block');

  })
</script>
@endsection