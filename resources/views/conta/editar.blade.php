@extends('layouts.main')

  @section('title', 'Cadastro de Clientes')

  @section('content')

    {{-- form start --}}
 <section class="container">

        <form action="{{ route('alterar_conta', ['id' => $conta->id]) }}" method="POST">
          @csrf  
          <div class="form-group col-5">
            <label for="conta">Conta</label>
              <input type="text" class="form-control" id="conta" name="conta" value="{{$conta->pessoa_id}}" readonly>
          </div>
            <div class="form-group col-5">
            <label for="conta">Número da conta</label>
            <input class="form-control" id="conta" name="conta" value="{{$conta->conta}}">
            </div>
            <br/>
            <button class="btn btn-danger" type="submit">Salvar cadastro</button>
        </form>
    </section>  
    {{-- form end --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

@endsection