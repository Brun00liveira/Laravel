@extends('layouts.main')

@section('title', 'Editar de Clientes')

@section('content')

  <form action="{{ route('alterar_pessoa', ['id' => $pessoa->id]) }}" method="POST">
    @csrf
    <div class="form-group col-5">
      <label for="name">Nome</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $pessoa->name }}">
    </div>
    <div class="form-group col-5">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $pessoa->cpf }}">
    </div>
    <div class="form-group col-5">
      <label for="cep">CEP</label>
      <input type="text" class="form-control" id="cep"  name="cep" value="{{ $pessoa->cep }}">
    </div>
    <div class="form-group col-5">
      <label for="numero">Número</label>
      <input type="text" class="form-control" id="numero" name="numero" value="{{ $pessoa->numero }}">
    </div>
    <div class="form-group col-5">
      <label for="logradouro">Logradouro</label>
      <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{ $pessoa->logradouro }}" >
    </div>
    <div class="form-group col-5">
      <label for="bairro">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $pessoa->bairro }}" >
    </div>
    <div class="form-group col-5">
      <label for="estado">Estado</label>
      <input type="text" class="form-control" id="estado" name="estado" value="{{ $pessoa->estado }}" >
    </div>
    <div class="form-group col-5">
      <label for="municipio">Município</label>
      <input type="text" class="form-control" id="municipio" name="municipio" value="{{ $pessoa->municipio }}">
    </div>
    <br/>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@endsection 