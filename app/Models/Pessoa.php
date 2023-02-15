<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pessoa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'cpf', 'cep', 'logradouro', 'bairro', 'numero', 'estado', 'municipio'];

     
    public function contas()
    {
        return $this->hasMany(Conta::class, 'pessoa_id');
    }
    public function movimentacoes()
    {
        return $this->hasMany(Movimentacao::class, 'pessoa_id');
    }
}

