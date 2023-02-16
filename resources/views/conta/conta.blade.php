
@extends('layouts.main')

@section('title', 'Cadastro de Clientes')

@section('content')

    <section class="container">
      <h2 class="h2">Cadastro de conta</h2><br />
        <form action="{{ route('cadastrar_conta')}}" method="POST">
          @csrf
          <select class="form-select" name="pessoa_id" id="pessoa_id" aria-label="Default select example">
            <option value="" selected>Seleciona a pessoa</option>
              @foreach ($pessoas as $p)
                <option value="{{$p->id}}">{{$p->name}} - {{$p->cpf}}</option>
              @endforeach
          </select>
          <br/>
            <div class="form-group col-5">
            <label for="conta">Número da conta</label>
            <input type="text" class="form-control" id="conta" name="conta">
            </div>
            <div class="form-group">
              <label for="saldo">Saldo</label>
              <input type="number" class="form-control" id="saldo" name="saldo">
            </div>
            <br/>
            <button class="btn btn-danger" type="submit">Salvar cadastro</button>
        </form>
        <br /><hr />
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nome</th>
              <th scope="col">Saldo</th>
              <th scope="col">Conta</th>
              <th scope="col">Editar</th>
              <th scope="col">Deletar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contas as $c)
            <tr>
                <td scope="row">{{$c->id}}</td>
                <td scope="row">{{$c->pessoa->name}}</td>
                <td scope="row">{{$c->saldo}}</td>
                <td scope="row">{{$c->conta}}</td>

                <td scope="row"><a href="editar/{{$c->id}}">\__/</a></td>
                <td scope="row"><a href="excluir/{{$c->id}}"> X </a></td> 
            </tr>
            @endforeach
          </tbody>
        </table>
    </section>  
  
    @endsection