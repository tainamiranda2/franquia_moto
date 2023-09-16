@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')

<div class="conteudo" style="margin: 5px;">

  <!-- <div style="padding: 20px;margin: 6vh; margin-right: 25vh; border-radius: 10px;display:flex; flex-direction:column; justify-content: center; align-items: center;">
        <i class="fa-solid fa-chart-pie" style="color: #929190;"></i>
        <h1 style="color: rgb(146, 145, 144);" >Não temos análises no momento!!</h1>
    </div>


--> 
    <div style="display:flex; padding:30px; ">
    <h1>Útlimos 4 lojas com vendas </h1>
    @foreach ($vendasPorLoja as $vendaPorLoja)
    <div class="card" style='margin:5px; padding: 5px;  width:200px; margin-bottom: 5px;'>
        <h1>{{ $vendaPorLoja->nome_loja }}</h1>
        <div>R$ {{ $vendaPorLoja->valor_total }}</div>
        <div id="chart_div{{ $vendaPorLoja->id }}" style="width: 300; height: 50px;"></div>
    </div>
@endforeach

</div>



    <div class="grafico-combinado"  style="margin:10px;">
    <div id="chat_combinacao" style="width: 100%; height: 200px;"></div>
    </div>

    <div class="juntar" style="display: flex; ">
    <div class="grafico-linha">
    <div id="curve_chart" style="width: 500px; height: 200px"></div>
    </div>

    <div class="card-produto" style="background: #fff; margin:10px; border-radius: 10px; width:400px">
    <h1>Produtos</h1>
      <p>Entrada {}</p>
      <p>Saída {}</p>
    </div>

</div>

<script src="../js/roda.js"></script> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!--grafico 1-->


<!--grafico 2-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Categoria', 'Cor 1', 'Cor 2'],
                ['Jan', 20, 30],
                ['Fev', 40, 10],
                ['Mar', 10, 50],
                ['Abril', 10, 50],
                ['Maio', 30, 20],
                ['Jun', 30, 20],
                ['Jul', 30, 20],
                ['Ago', 30, 20],
                ['Set ', 30, 20],
                ['Out ', 10, 50],
                ['Nov ', 10, 50],
                ['Dez ', 10, 50],

            ]);

            var options = {
                title: 'Gráfico de Colunas Empilhadas com Duas Cores',
               
                isStacked: true, // Empilhar as colunas
                colors: ['#e53935', '#929190'], // Definir cores para cada série
                hAxis: {
                    title: 'Categorias'
                },
                vAxis: {
                    title: 'Valores'
                }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chat_combinacao'));

            chart.draw(data, options);
        }
    </script>

    <!--grafico 3-->
    <script>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'Vendas', 'Produtos'],
                ['Fev', 40, 10],
                ['Mar', 10, 50],
                ['Abril', 10, 50],
                ['Maio', 30, 20],
                ['Jun', 30, 20],
                ['Jul', 30, 20],
                ['Ago', 30, 20],
                ['Set ', 30, 20],
                ['Out ', 10, 50],
                ['Nov ', 10, 50],
                ['Dez ', 10, 50],

        ]);

        var options = {
          title: 'Vendas - ',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
      </script>

<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>

@endsection