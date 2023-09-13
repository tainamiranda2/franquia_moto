@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')

<div class="conteudo">

  <!-- <div style="padding: 20px;margin: 6vh; margin-right: 25vh; border-radius: 10px;display:flex; flex-direction:column; justify-content: center; align-items: center;">
        <i class="fa-solid fa-chart-pie" style="color: #929190;"></i>
        <h1 style="color: rgb(146, 145, 144);" >Não temos análises no momento!!</h1>
    </div>
--> 
    <div style="display:flex; padding:30px;">
<div class="card">
        <h1>Pedro Oliveira</h1>
        <div>R$ {}</div>
        <div id="chart_div" style="width: 100%; height: 50px;"></div>

</div>
<div class="card">
        <h1>Pedro Oliveira</h1>
        <div>R$ {}</div>
        <div id="chart_div2" style="width: 100%; height: 50px;"></div>

</div>
<div class="card">
        <h1>Pedro Oliveira</h1>
        <div>R$ {}</div>
        <div id="chart_div3" style="width: 100%; height: 50px;"></div>

</div>
<div class="card">
        <h1>Pedro Oliveira</h1>
        <div>R$ {}</div>
        <div id="chart_div4" style="width: 100%; height: 50px;"></div>

</div>

</div>



    <div class="grafico-combinado">
    <div id="chat_combinacao" style="width: 500px; height: 200px;"></div>
    </div>

    <div class="grafico-linha">

    </div>

    <div class="card-produto">
<h1>Entrada</h1>
<h1>Saída</h1>
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
          ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          ['2004/05',  165,      938,         522,             998,           450,      614.6],
          ['2005/06',  135,      1120,        599,             1268,          288,      682],
       
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
<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection