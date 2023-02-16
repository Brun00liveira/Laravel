<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
   
    protected $fillable=['pessoa_id','conta_id','valor','depositar_retirar'];
    
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function conta()
    {
        return $this->belongsTo(Conta::class, 'conta_id');
    }

    protected $table = "movimentacoes"; 
}
