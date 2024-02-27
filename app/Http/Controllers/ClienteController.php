<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function __construct(Request $request,Cliente $cliente)
    {
        $this->request          = $request;
        $this->cliente          = $cliente;
    }   

    public function lista()
    {
        $titulo = 'Listagem de Clientes';
        $listas = Cliente::all();
        return view('cliente/lista',compact('titulo','listas'));
    }

    public function cadastro()
    {
        $titulo = 'Cadastro de Clientes';
        return view('cliente/cadastro',compact('titulo'));
    }
    
    public function CadastroSalvar(Request $request, Cliente $cliente)
    {
        $dados = Cliente::create([
            "nome"            => $request->nome,
            "contato"         => $request->contato,
            "endereco"        => $request->endereco
        ]);

        return redirect('cliente/lista');
    }

    public function editar($id)
    {
        $titulo = 'Editar de Clientes';
        $editar = Cliente::find($id);
        return view('cliente/editar',compact('titulo','editar'));
    }

    public function update(Request $request, Cliente $cliente,$id)
    {
        $dados = Cliente::find($id); 
        $dados->update([
            "nome"            => $request->nome,
            "contato"         => $request->contato,
            "endereco"        => $request->endereco
        ]);

        return redirect('cliente/lista');
    }

    public function deletar(Request $request, Cliente $cliente,$id)
    {
        $editar = $this->cliente->find($id);    
        $editar->delete();
        return redirect('cliente/lista');
    }
    

}
