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
            @foreach($veiculos as $veiculo)
                <tr>
                    <td style="border: 1px solid lightgray;">{{ $veiculo->nome }}</td>
                    <td style="border: 1px solid lightgray;">{{ $veiculo->marca }}</td>
                    <td style="border: 1px solid lightgray;">{{ date('d/m/Y', strtotime($veiculo->data_nascimento)) }}</td>
                    <td style="border: 1px solid lightgray;">{{ $veiculo->placa_veiculo }}</td>
                    <td style="border: 1px solid lightgray;">{{ $veiculo->sexo == 'M' ? 'Masculino' : 'Feminino' }}</td>
                </tr>    
            @endforeach
        </tbody>
    </table> 
  <!--   <table class="col-12" style="border: 1px solid lightgray; margin-top:20px"> -->
</div>
@extends('layout/footer')