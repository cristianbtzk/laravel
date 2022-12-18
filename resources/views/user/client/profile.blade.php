@extends('user.client.layout')
@section('title','Estados')
@section('content')
<div class="col p-3 d-flex flex-column">
  <div class="d-flex flex-column w-100 p-4 bg-light shadow-lg">
    <h4 class="text-center">{{ $user->name }}</h4>
    <h6>{{ $user->email }}</h6>
    <p class="mb-0">CPF: {{$user->cpf}}</p>
    <p class="mb-0">CNPJ: {{$user->cnpj}}</p>

    <form action="{{ route('client.setAddress')}}" method="post">
      @method("PUT")
      @csrf
      <h4>Endereço</h4>

      <label class="d-block">Estado</label>
      <select name="state">
        <option disabled selected hidden>Selecione um estado</option>
        @foreach($states as $state)
        <option value="{{$state->id}}">
          {{$state->name}}
        </option>
        @endforeach
      </select>
      <label class="{{$user->address ?'d-block' :'d-none'}} hidden">Cidade</label>
      <select class="{{$user->address ?'d-block' :'d-none'}} hidden" name="city_id"></select>
      <label class="d-block">CEP</label>
      <input type='text' name="postal_code" value="@if (isset($user->address)) {{$user->address->postal_code}} @endif"><br>
      <label class="d-block">Bairro</label>
      <input name="district" type='text' value="@if (isset($user->address)) {{$user->address->district}} @endif"><br>
      <label class="d-block">Rua</label>
      <input name="street" type='text' value="@if (isset($user->address)) {{$user->address->street}} @endif"><br>
      <label class="d-block">Número</label>
      <input name="house_number" type='text' value="@if (isset($user->address)) {{$user->address->house_number}} @endif"><br>
      <button class="btn btn-primary mt-4" type="submit">Alterar endereço</button>
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
      $('.hidden').addClass('d-block');
      $('.hidden').removeClass('d-none');
    })


  })
</script>
@endsection