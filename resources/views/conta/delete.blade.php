
@extends('layouts.main')

  @section('title', 'Cadastro de Clientes')

  @section('content')

    <form action="" method="POST">
        @csrf
        <div class="form-group col-5">
          <label for="">Tem certeza que deseja excluir este produto:</label>
          <input type="text" class="form-control" name="name">
        </div>

        <button type="submit" class="btn btn-primary">Sim</button>
    </form>

  @endsection