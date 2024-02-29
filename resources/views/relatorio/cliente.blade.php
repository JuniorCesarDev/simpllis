
@extends('layout/relatorioHeader')
<meta charset="UTF-8">
<div class="col">
    <h3>{{ $titulo}}</h3>
    <hr>
        <table class="table" id="tb_fixo" >
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Estabelecimento</th>
                    <th scope="col">Data Atendimento  </th> 
                  <!--   <th scope="col">Prioridade</th>  -->
                    
                    </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td style="border: 1px solid lightgray;"></td>
                    <td style="border: 1px solid lightgray;"> </td>
                    <td style="border: 1px solid lightgray;"></td>
                    <td style="border: 1px solid lightgray;" data-nome="vence" id="vencimento"> </td>
                
                </tr>    
               
            </tbody>
        </table> 
        <div><h4>Somatoria do valor total</h4></div>
        <table class="col-12" style="border: 1px solid lightgray;">
            <td class="float-right">Valor Total </td>
        </table> 

        <table class="col-12" style="border: 1px solid lightgray; margin-top:20px">

</div>
<style>
    .code{
        height:80px,!important;
        width:80px,!important;
    }
</style>
@extends('layout/footer')