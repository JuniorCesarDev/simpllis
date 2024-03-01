@extends('layout/relatorioHeader')
<meta charset="UTF-8">
<div class="col">
    <small style='float:right;'>Gerado:<?php echo date('d/m/Y H:i'); ?></small>
    <h3>{{ $titulo}}</h3> 
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Codigo Cliente </th>
                <th scope="col">Nome Cliente</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Gênero do Cliente</th>
                <th scope="col">Endereço</th>
                <th scope="col">Contato</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td style="border: 1px solid lightgray;">{{ $cliente->id }}</td>
                    <td style="border: 1px solid lightgray;">{{ $cliente->nome }}</td>
                    <td style="border: 1px solid lightgray;">{{ date('d/m/Y', strtotime($cliente->data_nascimento)) }}</td>
                    <td style="border: 1px solid lightgray;">{{ $cliente->sexo == 'M' ? 'Masculino' : 'Feminino' }}</td>
                    <td style="border: 1px solid lightgray;">{{ $cliente->endereco }}</td>
                    <td style="border: 1px solid lightgray;">{{ $cliente->contato }}</td>
                </tr>    
            @endforeach
        </tbody>
    </table> 
  <!--   <table class="col-12" style="border: 1px solid lightgray; margin-top:20px"> -->
</div>
@extends('layout/footer')