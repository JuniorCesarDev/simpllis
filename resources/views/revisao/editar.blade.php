@extends('layout.cabecalho')
@include('layout.menulateral')

<div class="container" style="margin-top:3%;">
    <div class="row">
        <div class="col"></div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <div> <h3>{{ $titulo }}</h3> </div>
                       
                        <form action="{{route('cliente.update',['id' => $editar->id])}}" method="post">
                            @csrf
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" value="{{ $editar->nome }}">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="endereco" value="{{ $editar->endereco }}">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Contato</label>
                                <input type="text" class="form-control contato" id="exampleInputEmail1" aria-describedby="emailHelp" name="contato" value="{{ $editar->contato }}">
                            </div>
                            <button type="submit" class="btn btn-success" style="float:right">Editar</button>
                            <a href="{{ route('cliente.deletar',['id' => $editar->id]) }}">
                            <button type="button" class="btn btn-outline-danger" style="margin-left:10px">Deletar</button></a>
                        </form>
                    </div>
                </div>
            </div>
        <div class="col"></div>
    </div>
</div>

@extends('layout.footer')
<script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
<script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>

<script>
var behavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
options = {
    onKeyPress: function (val, e, field, options) {
        field.mask(behavior.apply({}, arguments), options);
    }
};

$('.contato').mask(behavior, options);
</script>
