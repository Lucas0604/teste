<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class adocoes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'adocoes';
    protected $primaryKey = 'id_adocao';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'dt_inicio',
        'dt_inicio_pa',
        'dt_devolucao',
    ];
    protected $fillabel = [
        'id_cliente',
        'id_pet',
        'id_status',
        'dt_inicio',
        'dt_inicio_pa',
        'dt_devolucao',
        'descricao',
        'observacao'
    ];

}
