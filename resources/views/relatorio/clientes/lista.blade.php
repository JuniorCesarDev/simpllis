@extends('layout.cabecalho')
@include('layout.menulateral')

<div class="container" style="margin-top:3%;">
    <div class="row">
        <div class="col"></div>
                <div class="card">
                    <div class="container" style="margin-top:3%; margin-bottom:3%;" >
                        <div class="row">
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">Todos os Clientes</h5>
                                        <p class="card-text">Relátorio possui Todos os Clientes </p>
                                        <a target=”_blank” href="{{ url('relatorio_cliente/todos_clientes') }}"  class="btn btn-primary">Gerar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                Column
                            </div>
                            <div class="col">
                                Column
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col"></div>
    </div>
</div>

@extends('layout.footer')