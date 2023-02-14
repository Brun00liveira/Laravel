<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movimentacao extends Model
{
    protected $fillable=['pessoa_id','conta_id','saldo','valor','depositar_retirar'];
}
