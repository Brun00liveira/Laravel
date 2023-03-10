@extends('layouts.main')

@section('content')

<section class="container col-6">
    <form action="{{route('cadastrar_movimentacao')}}" method="POST">
      @csrf
        <div class="form-group">
            <label for="pessoa">Selecione a pessoa</label>
            <select class="form-select" name="pessoa_id" id="pessoa_id">
              <option value="" selected>Seleciona a pessoa</option>
                @foreach ($pessoas as $p)
                  <option value="{{$p->id}}">{{$p->name}} - {{$p->cpf}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="conta">Conta</label>
            <select class="form-select" id="conta" name="conta_id">
              <option value="" selected>Seleciona a conta</option>
                @foreach ($contas as $c)
              <option value="{{$c->id}}">{{$c->conta}} -> Saldo : {{$c->saldo}} R$</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" id="valor" name="valor">
        </div>

        <div class="form-group">
            <label for="depositar_retirar">Saque ou deposito?</label>
            <select class="form-select" name="depositar_retirar" id="depositar_retirar">
                <option value="" selected>Selecione a opção</option>
                    <option value="1">Saque</option>
                    <option value="2">depósito</option>
              </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    <br /><br />
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Valor</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($movimentacoes as $m) 
        <tr>
          <td scope="row">Agora</td>
          
          <td scope="row">
            @if($m->depositar_retirar == 1){
                {{$m->conta->saldo - $m->valor}}
            }@else
            {
              {{$m->conta->saldo + $m->valor}}
            }
            @endif
            </td>

        </tr>   
        @endforeach
      </tbody>
    </table>
</section>
@endsection