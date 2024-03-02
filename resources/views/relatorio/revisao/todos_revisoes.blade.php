@extends('layout/relatorioHeader')
<meta charset="UTF-8">
<div class="col">
    <small style='float:right;'>Gerado:<?php echo date('d/m/Y H:i'); ?></small>
    <h3>{{ $titulo}}</h3>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Cliente</th>
                <th scope="col">Marca</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Placa</th> 
                <th scope="col">Gênero</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($revioes as $revisao)
                <tr>
                    <td style="border: 1px solid lightgray;">{{ $revisao->n_os }}</td>
                    <td style="border: 1px solid lightgray;">{{ $revisao->servicos }}</td>
                    <td style="border: 1px solid lightgray;">{{ $revisao->proprietario_cliente }}</td>
                    <td style="border: 1px solid lightgray;">{{ $revisao->placa }}</td>
                    <td style="border: 1px solid lightgray;">{{ date('d/m/Y', strtotime($revisao->data_revisao)) }}</td>
                </tr>    
            @endforeach
        </tbody>
    </table> 
  <!--   <table class="col-12" style="border: 1px solid lightgray; margin-top:20px"> -->
</div>
@extends('layout/footer')