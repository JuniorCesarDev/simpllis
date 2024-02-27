<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $table = 'tb_revisao_veiculos';

    protected $fillable =[
        'id',
        'marca',
        'placa_veiculo',
        'fk_proprietario',
        'updated_at',
        'created_at'
    ];
}
