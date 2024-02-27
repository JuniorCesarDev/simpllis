<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'tb_cliente';

    protected $fillable =[
        'id',
        'nome',
        'endereco',
        'contato',
        'updated_at',
        'created_at'
    ];
}
