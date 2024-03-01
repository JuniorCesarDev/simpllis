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
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome"  placeholder="Nome Cliente"  required>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="endereco"  placeholder="AV. Trabalhadores"  required>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Contato</label>
                                <input type="text" class="form-control contato" id="exampleInputEmail1" aria-describedby="emailHelp" name="contato"  placeholder="(00) 00000-0000"  required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Gênero</label>
                                    <select class="form-select form-select " aria-label=".form-select example"  name="sexo" required >
                                        <option selected>Selecione...</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Data Nascimento</label>
                                    <input type="date" class="form-control" name="data_nascimento" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" style="float:right;margin-top:2%">Enviar</button>
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


