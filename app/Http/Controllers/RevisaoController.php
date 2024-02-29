<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RevisaoVeiculos;

class RevisaoController extends Controller
{
    public function __construct(Request $request,RevisaoVeiculos $revisao)
    {
        $this->request          = $request;
        $this->revisao          = $revisao;
    }  

    public function Lista()
    {
        $titulo = 'Listagem de Revisões';
        $listas = RevisaoVeiculos::all();
        
        if( count( $listas) > 0){
            $sem_registro = "Não Ha Registro";
            return view('revisao/lista',compact('titulo','listas','sem_registro'));
        }else{
            return view('revisao/lista',compact('titulo','listas'));
        }
    }

    public function Cadastro()
    {
        $titulo = 'Cadastro de Revisões';
        return view('revisao/cadastro',compact('titulo'));
    }

    public function RevisaoSalvar(Request $request, RevisaoVeiculos $revisao)
    {
        //dd($request->all());
        $dados = RevisaoVeiculos::create([
            "n_os"                   => $request->n_os,
            "servicos"               => $request->servicos,
            "proprietario_cliente"   => $request->proprietario_cliente,
            "placa"                  => $request->placa,
            "data_revisao"           => $request->data_revisao
        ]);
        if($dados){
            return redirect('revisao/lista')->with('success', 'Cadastro Salvo com secesso!');
        }else{
            return redirect('revisao/cadastro')->with('error', 'Cadastro não Salvo!');
        }
    }

    public function editar($id)
    {
        $titulo = 'Editar de Revisões';
        $editar = RevisaoVeiculos::find($id);
        return view('revisao/editar',compact('titulo','editar'));
    }

    public function update(Request $request, RevisaoVeiculos $revisao,$id)
    {
        $dados = RevisaoVeiculos::find($id); 
        $dados->update([
            "n_os"                   => $request->n_os,
            "servicos"               => $request->servicos,
            "proprietario_cliente"   => $request->proprietario_cliente,
            "placa"                  => $request->placa,
            "data_revisao"           => $request->data_revisao
        ]);

        if($dados){
            return redirect('revisao/lista')->with('edit', 'Cadastro Salvo com secesso!');
        }else{
            return redirect('revisao/cadastro')->with('error', 'Cadastro não Salvo!');
        }
    }

    public function deletar(Request $request, RevisaoVeiculos $revisao,$id)
    {
        $editar = $this->revisao->find($id);    
        $editar->delete();
        return redirect('revisao/lista');
    }
}
