@extends('layout.cabecalho')
@include('layout.menulateral')

<div class="container" style="margin-top:3%;">
    <div class="row">
        <div class="col"></div>
            @if($mensage = Session::get('success'))
            <div class="col-9"><div class="alert alert-success" role="alert">
                Cadastro Salvo com Sucesso!!
            </div>
            @elseif($mensage = Session::get('edit'))
            <div class="col-9"><div class="alert alert-success" role="alert">
                Editado Salvo com Sucesso!!
            </div>
            @endif
                <div class="card">
                    <div class="card-body">
                        <div> <h3>{{ $titulo }}</h3> </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Numero da Os</th>
                                    <th scope="col">Descrição do Serviço</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Placa do Veiculo</th>
                                    <th scope="col">Data da Revisão</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $listas as $lista  )
                                <tr>
                                    <td>
                                        <a href="{{ route('revisao.editar',[$lista->id]) }}" style="text-decoration:none" >
                                            {{ $lista->n_os }}
                                        </a>
                                   </td>
                                    <td>{{ $lista->servicos }}</td>
                                    <td>{{ $lista->proprietario_cliente }}</td>
                                    <td>{{ $lista->placa }}</td>
                                    <td>{{ date('d/m/Y', strtotime($lista->data_revisao ))}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <div class="col"></div>
    </div>
</div>

@extends('layout.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    setTimeout(() => {
        $('.alert').hide()
    }, "3000");
});
</script>
