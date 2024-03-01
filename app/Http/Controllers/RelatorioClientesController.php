<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\RevisaoVeiculos;
use Illuminate\Support\Facades\Facade;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;

class RelatorioClientesController extends Controller
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
        $titulo = 'Cadastro de Clientes';
        return view('relatorio/clientes/lista',compact('titulo')); 
    }
    
    public function todos_clientes()
    {
        $titulo = 'Cadastro dos Cliente';
        $clientes = Cliente::orderBy('nome', 'ASC')->get();  //$posts = Post::orderBy('id', 'DESC')->get();

        $pdf = PDF::loadView('relatorio/clientes/todos_cliente',compact('titulo','clientes'));
        return $pdf->setPaper('a4','landscape')->stream('data');
    }
}
