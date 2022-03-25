<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioridades extends Model
{
    use HasFactory;

    protected $table = 'tickets_prioridades';

    protected $fillable = [
        'nome_prioridade',
        'cor_prioridade',
        'ordenacao',
        'data_limite_atendimento',
        'status'
    ];
}
