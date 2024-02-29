<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function __construct(Request $request,Cliente $cliente, Veiculo $veiculo)
    {
        $this->request          = $request;
        $this->cliente          = $cliente;
        $this->veiculo          = $veiculo;
    }  

    public function lista()
    {
        $titulo = 'Listagem de Veículo';
        $listas = Veiculo::all();
        
        if( count( $listas) > 0){
            $sem_registro = "Não Ha Registro";
            return view('veiculo/lista',compact('titulo','listas','sem_registro'));
        }else{
            return view('veiculo/lista',compact('titulo','listas'));
        }

       
    }

    public function cadastro()
    {
        $titulo = 'Cadastro de Veículo';
        return view('veiculo/cadastro',compact('titulo'));
    }

    public function VeiculoSalvar(Request $request, Veiculo $veiculo)
    {
        $dados = Veiculo::create([
            "marca"           => $request->marca,
            "placa_veiculo"   => $request->placa_veiculo,
           // "endereco"      => $request->endereco
        ]);
        if($dados){
            return redirect('veiculo/lista')->with('success', 'Cadastro Salvo com secesso!');
        }else{
            return redirect('veiculo/cadastro')->with('error', 'Cadastro não Salvo!');
        }
    }

    // desenvolver 

    public function editar($id)
    {
        $titulo = 'Editar de Veiculos';
        $editar = Veiculo::find($id);
        return view('veiculo/editar',compact('titulo','editar'));
    }

    public function update(Request $request, Veiculo $veiculo,$id)
    {
        $dados = Veiculo::find($id); 
        $dados->update([
            "marca"            => $request->marca,
            "placa_veiculo"    => $request->placa_veiculo,
           // "endereco"        => $request->endereco
        ]);

        if($dados){
            return redirect('veiculo/lista')->with('edit', 'Cadastro Salvo com secesso!');
        }else{
            return redirect('veiculo/cadastro')->with('error', 'Cadastro não Salvo!');
        }
    }

    public function deletar(Request $request, Veiculo $veiculo,$id)
    {
        $editar = $this->veiculo->find($id);    
        $editar->delete();
        return redirect('veiculo/lista');
    }
}
