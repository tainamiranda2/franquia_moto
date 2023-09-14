@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')

<div class="conteudo">

  <!-- <div style="padding: 20px;margin: 6vh; margin-right: 25vh; border-radius: 10px;display:flex; flex-direction:column; justify-content: center; align-items: center;">
        <i class="fa-solid fa-chart-pie" style="color: #929190;"></i>
        <h1 style="color: rgb(146, 145, 144);" >Não temos análises no momento!!</h1>
    </div>
--> 
@foreach($venda as $teste)

<p>{{$teste->valor_total}}</p>
@endforeach
    <div style="display:flex; padding:30px;">
<div class="card" style='margin:5px; padding: 10px;  width:200px;'>
        <h1>Pedro Oliveira</h1>
        <div>R$ {}</div>
        <div id="chart_div" style="width: 100%; height: 50px;"></div>

</div>
<div class="card"  style='margin:5px; padding: 10px;  width:200px;'>
        <h1>Pedro Oliveira</h1>
        <div>R$ {}</div>
        <div id="chart_div2" style="width: 100%; height: 50px;"></div>

</div> 
<div class="card"  style='margin:5px; padding: 10px; width:200px;' >
        <h1>Pedro Oliveira</h1>
        <div>R$ {}</div>
        <div id="chart_div3" style="width: 100%; height: 50px;"></div>

</div>
<div class="card"  style='margin:5px; padding: 10px;  width:200px;'>
        <h1>Pedro Oliveira</h1>
        <div>R$ {}</div>
        <div id="chart_div4" style="width: 100%; height: 50px;"></div>

</div>

</div>



    <div class="grafico-combinado"  style='margin:5px'>
    <div id="chat_combinacao" style="width: 500px; height: 200px;"></div>
    </div>

    <div class="juntar" style="display: flex;">
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

<script>
google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Work', 11],
     
      ['Exercise', 2],
    ]);

    var options = {
      title: 'My Daily Activities',
      pieHole: 0.4,
      colors: ['#e53935', '#929190']
    };

    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);

    var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
    chart2.draw(data, options);

    var chart3 = new google.visualization.PieChart(document.getElementById('chart_div3'));
    chart3.draw(data, options);

    var chart4 = new google.visualization.PieChart(document.getElementById('chart_div4'));
    chart4.draw(data, options);
  }

  document.addEventListener('DOMContentLoaded', carregarGrafico);
</script>
<!--grafico 2-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Bolivia', 'Ecuador'],
          ['2004/05',  165,      938,         ],
          ['2005/06',  135,      1120,        ],
       
        ]);

        var options = {
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}},
          colors: ['#e53935', '#929190']
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chat_combinacao'));
        chart.draw(data, options);
      }
    </script>

    <!--grafico 3-->
    <script>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
      </script>

<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>

@endsection