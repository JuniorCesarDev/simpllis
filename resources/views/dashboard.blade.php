@extends('layout.cabecalho')
@include('layout.menulateral')
<!-- incio -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <div class="container" style="margin-top:1%;">
        <div class="row">
            <h5>DashBord Quantidade Revisões</h5>
            <div class="card">
                <div class="card-body">
                    <!-- INICIO DO DASHBORD  -->
                    <div class="row">
                        <div class="col">
                            <head>
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <script type="text/javascript">
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawChart);
                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['id','n_os'],
                                        ['{{ $dashRevisoes }}' , {{ $dashRevisoes }} ]
                                    ]);

                                    var options = {
                                        title: ' Quantidade Revisões'
                                    };
                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                    chart.draw(data, options);
                                }
                                </script>
                            </head>
                            <body>
                                <div id="piechart" style="width: 400px; height: 400px;"></div>
                            </body>
                        </div>
                        <div class="col">
                            <head>
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <script type="text/javascript">
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawChart);
                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['id','n_os'],
                                        ['{{ $dashRevisoes }}' , {{ $dashRevisoes }} ]
                                    ]);
                                    var options = {
                                        title: ' Quantidade Revisões'
                                    };
                                    var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                                    chart.draw(data, options);
                                }
                                </script>
                            </head>
                            <body>
                                <div id="piechart1" style="width: 400px; height: 400px;"></div>
                            </body>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>



<!-- fim -->
@extends('layout.footer')