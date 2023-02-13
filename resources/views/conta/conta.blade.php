
@extends('layouts.main')

@section('title', 'Cadastro de Clientes')

@section('content')

    <section class="container">
      <h2 class="h2">Cadastro de conta</h2><br />
        <form action="{{ route('cadastrar_conta' )}}" method="POST">
          @csrf 
          <select class="form-select" aria-label="Default select example">
            <option value="" selected>Seleciona a pessoa</option>
              @foreach ($pessoas as $p)
                <option value="{{$p->id}}">{{$p->name}} - {{$p->cpf}}</option>
              @endforeach
          </select>
          
            <div class="form-group col-5">
            <label for="conta">Número da conta</label>
            <input type="text" class="form-control" id="conta" name="conta">
            </div>
            <br/>
            <button class="btn btn-danger" type="submit">Salvar cadastro</button>
        </form>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nome</th>
              <th scope="col">CPF</th>
              <th scope="col">Conta</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row"></td>
              <td scope="row"></td>
              <td scope="row"></td>
              <td scope="row"></td>
              <td scope="row"><a href="">\__/</a></td>
              <td scope="row"><a href=""> X </a></td>
            </tr>
          </tbody>
        </table>
    </section>  
  
    @endsection