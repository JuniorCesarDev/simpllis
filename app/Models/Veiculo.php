<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $table = 'tb_veiculo';

    protected $fillable =[
        'id',
        'marca',
        'placa_veiculo',
        'nome',
        'sexo',
        'data_nascimento',
        //'fk_proprietario',
        'updated_at',
        'created_at'
    ];

    // FUNÇÃO

    public static function IndiceMas()
    {
        return Veiculo::where("sexo","M")
        ->get()->count();
    }

    public static function IndiceFem()
    {
        return Veiculo::where("sexo","F")
        ->get()->count();
    }

}
