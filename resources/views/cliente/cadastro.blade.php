@extends('layout.cabecalho')
@include('layout.menulateral')

<div class="container" style="margin-top:3%;">
    <div class="row">
        <div class="col"></div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <div> <h3>{{ $titulo }}</h3> </div>
                        <form action="{{route('cliente.cadastrosalvar')}}" method="post">
                            @csrf
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="endereco">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Contato</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contato">
                            </div>
                            <button type="submit" class="btn btn-success" onclick="botao()" style="float:right">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        <div class="col"></div>
    </div>
</div>

@extends('layout.footer')
<script>
function botao(){
  alert("Alertar");
}
