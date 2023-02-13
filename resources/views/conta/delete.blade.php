
@extends('layouts.main')

  @section('title', 'Cadastro de Clientes')

  @section('content')

    <form action="{{ route('excluir_conta', ['id' => $conta->id]) }}" method="POST">
        @csrf
        <div class="form-group col-5">
          <label for="">Tem certeza que deseja excluir este produto:</label>
          <input type="text" class="form-control" name="name" value="{{$conta->pessoa_id}}" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Sim</button>
    </form>

  @endsection