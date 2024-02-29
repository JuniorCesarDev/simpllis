<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\RevisaoVeiculos;
use Illuminate\Support\Facades\Facade;
use PDF;
use Dompdf\Dompdf;

class RelatorioController extends Controller
{
    public function __construct(Request $request, Cliente $cliente, Veiculo $veiculo, RevisaoVeiculos $revisao)
    {
        $this->request     = $request;
        $this->cliente     = $cliente;
        $this->veiculo     = $veiculo;
        $this->revisao     = $revisao;
    }
    
    public function cliente()
    {
        $titulo = "Relatorio de Cliente Cadastrados ";

        $pdf = PDF::loadView('relatorio/cliente',compact('titulo'));
        return $pdf->setPaper('a4','landscape')->stream('data');
    }
}

