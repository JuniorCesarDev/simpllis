<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\RevisaoVeiculos;
use Illuminate\Support\Facades\Facade;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;

class RelatorioVeiculoController extends Controller
{
    public function __construct(Request $request, Cliente $cliente, Veiculo $veiculo, RevisaoVeiculos $revisao)
    {
        $this->request     = $request;
        $this->cliente     = $cliente;
        $this->veiculo     = $veiculo;
        $this->revisao     = $revisao;
    }

    public function lista()
    {
        $titulo = 'Cadastro de Veículos';
        return view('relatorio/veiculos/lista',compact('titulo')); 
    }
    
    public function todos_veiculos()
    {
        $titulo = 'Relatorio de Todos os Veículos';
        $veiculos = Veiculo::orderBy('nome', 'ASC')->get();

        $pdf = PDF::loadView('relatorio/veiculos/todos_veiculos',compact('titulo','veiculos'));
        return $pdf->setPaper('a4','landscape')->stream('data');
    }
    
    public function indece()
    {
        $titulo = 'Relatorio Indice Quem Possui Mais Veículos';
        $veiculos = Veiculo::orderBy('sexo', 'ASC')->get();
        $indiceM = Veiculo::IndiceMas();
        $indiceF = Veiculo::IndiceFem();

        $pdf = PDF::loadView('relatorio/veiculos/indice',compact('titulo','veiculos','indiceM','indiceF'));
        return $pdf->setPaper('a4','landscape')->stream('data');
    }
}
