@extends('layout.cabecalho')
@include('layout.menulateral')

<div class="container" style="margin-top:3%;">
    <div class="row">
        <div class="col"></div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <div> <h3>{{ $titulo }}</h3> </div>
                        <form action="{{route('veiculo.veiculoSalvar')}}" method="post">
                            @csrf
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Modelo do carro</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="marca"  placeholder="Golf"  required>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Placa do Veiculo</label>
                                <input type="text" class="form-control"  onkeyup="limite(this)"  id="exampleInputEmail1" aria-describedby="emailHelp" name="placa_veiculo"  placeholder="AAA1234"  required>
                            </div>
                            <!-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Contato</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contato" required>
                            </div> -->
                            <button type="submit" class="btn btn-success" style="float:right">Enviar</button>
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
function limite(string = ""){
    string.value = string.value.substring(0,7);
}
</script>


