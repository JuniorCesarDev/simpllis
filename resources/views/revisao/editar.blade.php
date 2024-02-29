@extends('layout.cabecalho')
@include('layout.menulateral')

<div class="container" style="margin-top:3%;">
    <div class="row">
        <div class="col"></div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <div> <h3>{{ $titulo }}</h3> </div>
                       
                        <form action="{{route('revisao.update',['id' => $editar->id])}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Numero da OS</label>
                                <input type="text" class="form-control n_os" id="exampleInputEmail1" aria-describedby="emailHelp" name="n_os" placeholder="1234" value="{{ $editar->n_os }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Descrição do Serviço</label>
                                <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" name="servicos" placeholder="Manutenção Realizada" value="{{ $editar->servicos }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Prorietario do Veiculo</label>
                                <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" name="proprietario_cliente" placeholder="Cliente" value="{{ $editar->proprietario_cliente }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Placa do Veiculo</label>
                                <input type="text" class="form-control" onkeyup="limite(this)"  id="exampleInputEmail1" aria-describedby="emailHelp" name="placa"  placeholder="AAA1234" value="{{ $editar->placa }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Data do Veiculo</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_revisao" value="{{ $editar->data_revisao }}" required>
                            </div>
                            <button type="submit" class="btn btn-success" style="float:right">Editar</button>
                            <a href="{{ route('revisao.deletar',['id' => $editar->id]) }}">
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
    return val.replace(/\D/g, '').length === 11 ? '0000' : '0009';
},
options = {
    onKeyPress: function (val, e, field, options) {
        field.mask(behavior.apply({}, arguments), options);
    }
};

$('.n_os').mask(behavior, options);
</script>
