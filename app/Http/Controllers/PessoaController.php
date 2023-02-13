<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function create()
    {
        $pessoa = Pessoa::get();  
        return view('pessoa.pessoa',['pessoa' => $pessoa]);
        
    }
    public function register(Request $request)
    {
        // $data = $request->all();
        // pessoa::create($data);
        Pessoa::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'cep' => $request->cep,
            'numero' => $request->numero,
            'logradouro' => $request->logradouro,
            'bairro' => $request->bairro,
            'estado' => $request->estado,
            'municipio' => $request->municipio,
        ]);
        return redirect('/pessoa/novo');
    }

    public function show($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoa.cadastro', ['pessoa' => $pessoa]);
    }
    public function edit($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoa.editar', ['pessoa' => $pessoa]);
    }
    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::FindOrFail($id);

        $pessoa->update([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'cep' => $request->cep,
            'numero' => $request->numero,
            'logradouro' => $request->logradouro,
            'bairro' => $request->bairro,
            'estado' => $request->estado,
            'municipio' => $request->municipio,
        ]);

        return redirect('/pessoa/novo');
    }
    public function delete($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoa.delete', ['pessoa' => $pessoa]);
    }
    public function destroy($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();

        return redirect('/pessoa/novo');
    }
}
