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
                                    <th scope="col">Nome</th>
                                    <th scope="col">Gênero do Cliente</th>
                                    <th scope="col">Marca do Veículo</th>
                                    <th scope="col">Placa do Veículo </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $listas as $lista  )
                                <tr>
                                    <td>
                                        <a href="{{ route('veiculo.editar',[$lista->id]) }}" style="text-decoration:none" >
                                        {{ $lista->nome }}
                                        </a>
                                    </td>
                                    <td>{{ $lista->sexo == 'M' ? 'Masculino' : 'Feminino' }}</td>
                                    <td>{{ $lista->marca }}</td>
                                    <td>{{ $lista->placa_veiculo }}</td>
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
