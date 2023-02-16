<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $fillable = ['pessoa_id', 'conta', 'saldo']; 
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }
    public function movimentacoes()
    {
        return $this->hasMany(Movimentacao::class, 'pessoa_id');
    }

}
