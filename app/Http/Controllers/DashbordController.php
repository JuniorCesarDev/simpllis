<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\RevisaoVeiculos;

class DashbordController extends Controller
{
    public function __construct(Request $request , Cliente $cliente, Veiculo $veiculo, RevisaoVeiculos $revisao)
    {
        $this->request = $request;
        $this->cliente = $cliente;
        $this->veiculo =  $veiculo;
        $this->revisao =  $revisao;
    }

    public function DashRevisoes() // DashRevisoesSoma
    {
        
        $dashRevisoes = $this->revisao->DashRevisoesSoma();
        $sqlValor = RevisaoVeiculos::all();

        //dd($sqlValor);
        return view('dashboard' ,compact('dashRevisoes','sqlValor'));
    }
}
