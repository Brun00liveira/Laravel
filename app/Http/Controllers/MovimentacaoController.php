<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\movimentacao;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    public function create()
    {
        $movimentacoes = Movimentacao::with('pessoa','conta')->get(); 
        $pessoas = Pessoa::get();
        $contas = Conta::get();
        return view('movimentacao.movimentacao',['movimentacoes' => $movimentacoes, 'contas' => $contas, 'pessoas' => $pessoas]);
    }
    public function register(Request $request)
    {
        Movimentacao::create([
            'pessoa_id' => $request->pessoa_id,
            'conta_id' => $request->conta_id,
            'valor' => $request->valor,
            'saldo' => $request->saldo,
            'depositar_retirar' => $request->depositar_retirar,
        ]);       
        return redirect('/movimentacao/novo');    
    }
    
    public function depositar(Request $request)
    {
        Movimentacao::create([
            'pessoa_id' => $request->pessoa_id,
            'conta_id' => $request->conta_id,
            'saldo' => $request->saldo,
            'valor' => $request->valor,
            'depositar_retirar' => $request->depositar_retirar,
        ]);       
        return redirect('/movimentacao/novo');    
    }

    public function show($id)
    {   
        $movimentacoes = Movimentacao::findOrFail($id);

        return view('movimentacao.cadastro', ['movimentacoes' => $movimentacoes]);
    }

}
