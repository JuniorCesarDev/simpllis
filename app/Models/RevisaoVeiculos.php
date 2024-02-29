<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevisaoVeiculos extends Model
{
    use HasFactory;

    protected $table = 'tb_revisao_veiculos';

    protected $fillable =[
        'id',
        'n_os',
        'servicos',
        'proprietario_cliente',
        'placa',
        'data_revisao',
        'updated_at',
        'created_at'
    ];


    // FUNCOES
    public static function DashRevisoesSoma()
    {
       return RevisaoVeiculos::count('id');
       
        // return RevisaoVeiculos::select('id','n_os')
        // ->get(); 
    }
}