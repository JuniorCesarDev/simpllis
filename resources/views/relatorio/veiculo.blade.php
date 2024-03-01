@extends('layout/relatorioHeader')
<meta charset="UTF-8">
<div class="col">
    <small style='float:right;'>Gerado:<?php echo date('d/m/Y H:i'); ?></small>
    <h3>{{ $titulo}}</h3> 
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Modelo Veículo </th>
                <th scope="col">Placa do Veículo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($veiculos as $veiculo)
                <tr>
                    <td style="border: 1px solid lightgray;">{{ $veiculo->marca }}</td>
                    <td style="border: 1px solid lightgray;">{{ $veiculo->placa_veiculo }}</td>
                </tr>    
            @endforeach
        </tbody>
    </table> 
  <!--   <table class="col-12" style="border: 1px solid lightgray; margin-top:20px"> -->
</div>
@extends('layout/footer')