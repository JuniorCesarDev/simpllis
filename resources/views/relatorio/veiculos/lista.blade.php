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
                                        <h5 class="card-title">Todos os Veículos</h5>
                                        <p class="card-text">Relátorio Possui Todos os Veículos</p>
                                        <a target=”_blank” href="{{ url('relatorio_veiculo/todos_veiculos') }}"  class="btn btn-primary">Gerar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Indice</h5>
                                        <p class="card-text">Relátorio Indice Quem Possui Mais Veículo</p>
                                        <a target=”_blank” href="{{ url('relatorio_veiculo/indece') }}"  class="btn btn-primary">Gerar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Indice</h5>
                                        <p class="card-text">Relátorio Todos as Marcas</p>
                                        <a target=”_blank” href="{{ url('relatorio_veiculo/todas_marcas') }}"  class="btn btn-primary">Gerar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Indice</h5>
                                        <p class="card-text">Relátorio Veiculos entre Homem e Mulheres</p>
                                        <a target=”_blank” href="{{ url('relatorio_veiculo/ordMF') }}"  class="btn btn-primary">Gerar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col"></div>
    </div>
</div>

@extends('layout.footer')
