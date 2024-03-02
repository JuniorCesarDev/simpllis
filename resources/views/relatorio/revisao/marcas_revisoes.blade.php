@extends('layout/relatorioHeader')
<meta charset="UTF-8">
<div class="col">
    <small style='float:right;'>Gerado:<?php echo date('d/m/Y H:i'); ?></small>
    <h3>{{ $titulo}}</h3> 
   
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Número da OS</th>
                <th scope="col">Descrição do Serviço</th>
                <th scope="col">Cliente</th> 
                <th scope="col">Marca do Veículo</th> 
                <th scope="col">Placa do Veículo</th> 
                <th scope="col">Data Última Revisão</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($revioes as $revisao)
                @foreach($revisao->MarcasDosVeiculos as $m)
                    <tr>
                        <td style="border: 1px solid lightgray;">{{ $revisao->n_os }}</td>
                        <td style="border: 1px solid lightgray;">{{ $revisao->servicos }}</td>
                        <td style="border: 1px solid lightgray;">{{ $revisao->proprietario_cliente }}</td>
                        <td style="border: 1px solid lightgray;">{{ $m->marca }}</td>
                        <td style="border: 1px solid lightgray;">{{ $revisao->placa }}</td>
                        <td style="border: 1px solid lightgray;">{{ date('d/m/Y', strtotime($revisao->data_revisao)) }}</td>
                    </tr>   
                @endforeach 
            @endforeach
        </tbody>
    </table> 
  <!--   <table class="col-12" style="border: 1px solid lightgray; margin-top:20px"> -->
</div>
@extends('layout/footer')