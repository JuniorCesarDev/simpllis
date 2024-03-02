<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcasVeiculos extends Model
{
    use HasFactory;

    protected $table = 'tb_marca_veiculos';

    protected $fillable =[
        'id',
        'marca',
        'fk_marca_veiculos',
        'updated_at',
        'created_at'
    ];
}
