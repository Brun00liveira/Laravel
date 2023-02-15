<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\MovimentacaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// ---------------- Rotas de pessoa start 
Route::get('/pessoa/novo', [PessoaController::class, 'create']);
Route::post('/pessoa/novo', [PessoaController::class, 'register'])->name('cadastrar_pessoa');
Route::get('/pessoa/ver/{id}', [PessoaController::class, 'show']);
Route::get('/pessoa/editar/{id}', [PessoaController::class, 'edit']);
Route::post('/pessoa/editar/{id}', [PessoaController::class, 'update'])->name('alterar_pessoa');
Route::get('/pessoa/excluir/{id}', [PessoaController::class, 'delete']);
Route::post('/pessoa/excluir/{id}', [PessoaController::class, 'destroy'])->name('excluir_pessoa');
// ---------------- Rotas de pessoa end
// ---------------- Rostas de conta start
Route::get('/conta/novo', [ContaController::class, 'create']);
Route::post('/conta/novo', [ContaController::class, 'register'])->name('cadastrar_conta');
Route::get('/conta/ver/{id}',[ContaController::class, 'show']);
Route::get('/conta/editar/{id}',[ContaController::class, 'edit']);
Route::post('/conta/editar/{id}',[ContaController::class, 'update'])->name('alterar_conta');
Route::get('/conta/excluir/{id}',[ContaController::class, 'delete']);
Route::post('/conta/excluir/{id}',[ContaController::class, 'destroy'])->name('excluir_conta');

// ---------------- Rostas de conta end
// ---------------- Rostas de movimentacao start
Route::get('/movimentacao/novo', [MovimentacaoController::class, 'create']);
Route::post('/movimentacao/novo', [MovimentacaoController::class, 'register'])->name('cadastrar_movimentacao');
// ---------------- Rostas de movimentacao end