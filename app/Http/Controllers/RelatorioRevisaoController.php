<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\RevisaoVeiculos;
use Illuminate\Support\Facades\Facade;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;

class RelatorioRevisaoController extends Controller
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
        $titulo = 'Relatorios de Revisões de Veículos';
        return view('relatorio/revisao/lista',compact('titulo')); 
    }

    public function todos_revisoes(Request $request)
    {
        $titulo = 'Relatorio de Todos as Reviões';
       // $revioes = Veiculo::orderBy('nome', 'ASC')->get();

        
        $inical = request('p_inicial');
        $final  = request('p_final');
        //dd($inical);  
        $revioes =  RevisaoVeiculos::whereBetween('data_revisao', [$inical, $final])
        ->orderBy('data_revisao', 'ASC')
        ->get();    
      //  dd($revioes);  

        $pdf = PDF::loadView('relatorio/revisao/todos_revisoes',compact('titulo','revioes'));
        return $pdf->setPaper('a4','landscape')->stream('data');
    }
}
