<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\MarcasVeiculos;

class RevisaoVeiculos extends Model
{
    use HasFactory;

    protected $table = 'tb_revisao_veiculos';

    protected $fillable =[
        'id',
        'n_os',
        'servicos',
        'proprietario_cliente',
        'marca',
        'placa',
        'data_revisao',
        'fk_marca_veiculos',
        'updated_at',
        'created_at'
    ];

    //RELACIONAMENTOS

    public function MarcasDosVeiculos():HasMany
    {
        return $this->hasMany(MarcasVeiculos::class,'fk_marca_veiculos','id');
    }

   
    // FUNCOES
    public static function DashRevisoesSoma()
    {
       return RevisaoVeiculos::count('id');
    }


}