<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $table = 'tickets_categorias';

    protected $fillable = [
        'nome_categoria',
        'id_pai',
        'cor_categoria',
        'data_limite_atendimento',
        'status'
    ];
}
