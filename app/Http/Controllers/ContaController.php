<?php

namespace App\Http\Controllers;
use App\Models\Conta;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class ContaController extends Controller
{ 
    public function create()
    {
        //get() -> select * from conta
        $contas = Conta::with('pessoa')->get(); 
        $pessoas = Pessoa::get();

        return view('conta.conta',['contas' => $contas, 'pessoas' => $pessoas]);
    }
    public function register(Request $request)
    {
   
        Conta::create([
            'pessoa_id' => $request->pessoa_id,
            'saldo' => $request->saldo,
            'conta' => $request->conta,
        ]);
        return redirect('/conta/novo');
    }

    public function show($id)
    {
        $conta = Conta::findOrFail($id);
        return view('conta.cadastrados', ['conta' => $conta]);
    }

    public function edit($id)
    {
        
        $conta = Conta::findOrFail($id);
        
        return view('conta.editar', ['conta' => $conta]);
        
    }

    public function update(Request $request, $id)
    {
        $conta = Conta::FindOrFail($id);

        $conta->update([
            'conta' => $request->conta,
            'pessoa_id' => $request->pessoa_id,
            'saldo' => $request->saldo_id,
        ]);

        return redirect('/conta/novo');
    }
    public function delete($id)
    {
        $conta = Conta::findOrFail($id);
        return view('conta.delete', ['conta' => $conta]);
    }
    public function destroy($id)
    {
        $conta = Conta::findOrFail($id);
        $conta->delete();

        return redirect('/conta/novo');
    }
}
