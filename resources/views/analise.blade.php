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
      <p>Produtos {}</p>
      <p>Saída {}</p>
    </div>

</div>

<script src="../js/roda.js"></script> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!--grafico 1-->


<!--grafico 2-->
<script type="text/javascript">
   //var vendasPorLoja = JSON.parse('{!! $vendasPorLojaJSON !!}');
   //var vendasPorDia = JSON.parse('{!! $vendasPorDiaJSON !!}');
      google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Dia', 'Quantidade de Vendas'],

            @foreach($vendasPorDia as $vendaDia)
                ['{{ $vendaDia->data }}', {{ $vendaDia->quantidade_vendas }}],
            @endforeach

            ]);

            var options = {
                title: 'Loja - {{ $lojaMaisVendida->nome_loja }}',
               
                isStacked: true, // Empilhar as colunas
                colors: ['#e53935', '#929190'], // Definir cores para cada série
                hAxis: {
                    title: 'Dia'
                },
                vAxis: {
                    title: 'Quantidade de Vendas'
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
         /*  ['Mes', 'Maior venda no mes', 'Menor venda no mes'],
                ['Fev', 40, 50],
                ['Mac', 50, 80],
                ['Abril', 30, 90],
               */
              ['Mês', 'Maior venda no mês', 'Menor venda no mês'],
            @foreach ($resultadosPorMes as $resultado)
                ['{{ $resultado->mes }}', {{ $resultado->max ?? 0 }}, {{ $resultado->min ?? 0 }}],
            @endforeach
        ]);

        var options = {
          title: 'Vendas por Mês',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
      </script>

<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>

@endsection