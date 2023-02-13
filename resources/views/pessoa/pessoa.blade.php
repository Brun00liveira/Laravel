  @extends('layouts.main')

  @section('title', 'Cadastro de Clientes')

  @section('content')
      
   {{-- form start --}}
    <section class="container">
      <h2 class="h2">Cadastro de cliente</h2><br />
      <form action="{{ route('cadastrar_pessoa')}}" method="POST">
        @csrf
        <div class="form-group col-5">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group col-5">
          <label for="cpf">CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="form-group col-5">
          <label for="cep">CEP</label>
          <input type="text" class="form-control" id="cep" name="cep">
        </div>
        <div class="form-group col-5">
          <label for="numero">Número</label>
          <input type="text" class="form-control" id="numero" name="numero">
        </div>
        <div class="form-group col-5">
          <label for="logradouro">Logradouro</label>
          <input type="text" class="form-control" id="logradouro" name="logradouro">
        </div>
        <div class="form-group col-5">
          <label for="bairro">Bairro</label>
          <input type="text" class="form-control" id="bairro" name="bairro">
        </div>
        <div class="form-group col-5">
          <label for="estado">Estado</label>
          <input type="text" class="form-control" id="estado" name="estado">
        </div>
        <div class="form-group col-5">
          <label for="municipio">Município</label>
          <input type="text" class="form-control" id="municipio" name="municipio">
        </div>
        <br/>

        <button type="submit" class="btn btn-primary">Enviar</button>
      </form><br />
      {{-- form end --}}
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">CEP</th>
            <th scope="col">Número</th>
            <th scope="col">Logradouro</th>
            <th scope="col">Bairro</th>
            <th scope="col">Estado</th>
            <th scope="col">Município</th>
            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pessoa as $p)
          <tr>
            <td scope="row">{{$p->id}}</td>
            <td scope="row">{{$p->name}}</td>
            <td scope="row">{{$p->cpf}}</td>
            <td scope="row">{{$p->cep}}</td>
            <td scope="row">{{$p->numero}}</td>
            <td scope="row">{{$p->logradouro}}</td>
            <td scope="row">{{$p->bairro}}</td>
            <td scope="row">{{$p->estado}}</td>
            <td scope="row">{{$p->municipio}}</td>
            <td scope="row"><a href="/pessoa/editar/{{$p->id}}">\__/</a></td>
            <td scope="row"><a href="/pessoa/excluir/{{$p->id}}"> X </a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
    @endsection