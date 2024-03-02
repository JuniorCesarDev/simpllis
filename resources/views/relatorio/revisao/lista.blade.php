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
                                        <h5 class="card-title">Todos as Revisões</h5>
                                        <p class="card-text">Relátorio Possui Todos as Revisões</p>
                                        <form action="{{ route('relatorio_revisao.todos_revisoes') }} " method="GET">
                                            <p>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <small>
                                                                <label for="exampleInputEmail1" class="form-label">Periodo Inicíal</label>
                                                                <input type="date" class="form-control" name="p_inicial" required>
                                                            </small>
                                                        </div>
                                                        <div class="col">
                                                            <small>
                                                                <label for="exampleInputEmail1" class="form-label">Periodo Final</label>
                                                                <input type="date" class="form-control" name="p_final" required>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </p>
                                            <button target=”_blank” class="btn btn-primary" type="submit" >Gerar</button>
                                        </form>
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
