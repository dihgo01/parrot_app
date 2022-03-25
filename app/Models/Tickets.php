<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $fillable = [
        'usuario_id',
        'categoria_id',
        'prioridade_id',
        'previsao_solucao',
        'titulo',
        'descricao',
        'tipo',
        'status_ticket',
        'data_finalizacao',
        'data_cancelamento',
        'status'
    ];
}
