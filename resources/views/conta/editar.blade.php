@extends('layouts.main')

  @section('title', 'Cadastro de Clientes')

  @section('content')

    {{-- form start --}}
 <section class="container">

        <form action="{{ route('alterar_conta', ['id' => $conta->id]) }}" method="POST">
          @csrf  
          <div class="form-group col-5">
            <label for="conta">Conta</label>
              <input type="text" class="form-control" id="conta" name="conta" value="{{$conta->pessoa_id}}" readonly/>
          </div>
            <div class="form-group col-5">
            <label for="conta">Número da conta</label>
            <input class="form-control" id="conta" name="conta" value="{{$conta->conta}}">
            </div>
            <br/>
            <button class="btn btn-danger" type="submit">Salvar cadastro</button>
        </form>
    </section>  

@endsection