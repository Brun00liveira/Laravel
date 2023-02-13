
@extends('layouts.main')

  @section('title', 'Cadastro de Clientes')

  @section('content')

    <section class="container">
      <form action="">
        <div class="form-group col-5">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="name">CPF</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="name">Número da Conta</label>
            <input type="text" class="form-control" id="name" name="name">
        <br/>
    </form>
    </section>

@endsection