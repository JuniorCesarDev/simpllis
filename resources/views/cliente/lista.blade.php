@extends('layout.cabecalho')
@include('layout.menulateral')

<div class="container" style="margin-top:3%;">
    <div class="row">
        <div class="col"></div>
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <div> <h3>{{ $titulo }}</h3> </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nome Cliente</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Contato</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $listas as $lista  )
                                <tr>
                                    <td>{{ $lista->id }}</td>
                                    <td>
                                        <a href="{{ route('cliente.editar',[$lista->id]) }}" style="text-decoration:none" >
                                            {{ $lista->nome }}
                                        </a>
                                   </td>
                                    <td>{{ $lista->endereco }}</td>
                                    <td>{{ $lista->contato }}</td>
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