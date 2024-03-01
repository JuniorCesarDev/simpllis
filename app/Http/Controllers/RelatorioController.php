<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\RevisaoVeiculos;
use Illuminate\Support\Facades\Facade;
// use App\Stackoverflow;
// use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $clientes = Cliente::all();

        $pdf = PDF::loadView('relatorio/cliente',compact('titulo','clientes'));
        return $pdf->setPaper('a4','landscape')->stream('data');
    }

    public function veiculo()
    {
        $titulo = "Relatorio de Veículos ";
        $veiculos = Veiculo::all();
        
        $pdf = PDF::loadView('relatorio/veiculo',compact('titulo','veiculos'));
        return $pdf->setPaper('a4','landscape')->stream('data');
    }

    public function revisao()
    {
        $titulo = "Relatorio de Revisões ";
        $revisoes = RevisaoVeiculos::all();
        
        $pdf = PDF::loadView('relatorio/revisao',compact('titulo','revisoes'));
        return $pdf->setPaper('a4','landscape')->stream('data');
    }
}

