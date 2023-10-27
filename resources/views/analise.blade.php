@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')
@include('layouts.sidebar')

<div class="form-container" style="margin: 5px;">

  <!-- <div style="padding: 20px;margin: 6vh; margin-right: 25vh; border-radius: 10px;display:flex; flex-direction:column; justify-content: center; align-items: center;">
        <i class="fa-solid fa-chart-pie" style="color: #929190;"></i>
        <h1 style="color: rgb(146, 145, 144);" >Não temos análises no momento!!</h1>
    </div>


--> 
<!--grafico 1-->

    <div style="display:flex; padding:30px; ">
    @foreach ($vendasPorLoja as $vendaPorLoja)
    <div class="card" style='margin:5px;  width:250px; margin-top:25px; border-radius: 10px;'>
        <p style=" color: #929190;">{{ $vendaPorLoja->nome_loja }}</p>
        <h1>R$ {{ $vendaPorLoja->valor_total }}</h1>
        <div id="piechart" style="width:200px;  height: 50px;"></div>

    </div>
@endforeach

</div>
<!--grafico 2-->

    <div class="grafico-combinado"  style="margin:5px;">
<div class="filtro">
    <label for="opcaoFiltro">Filtrar por:</label>
    <select id="opcaoFiltro">
        <option value="lojas">Lojas</option>
        <option value="moto">Moto</option>
        <option value="funcionario">Funcionário</option>
    </select>
    <button onclick="filtrar()">Filtrar</button>
</div>
    <div id="chat_combinacao" style="width: 100%; height: 200px;"></div>
    </div>

    <div class="juntar" style="display: flex; margin:5px;">
    <div class="grafico-linha">
    <div id="curve_chart" style="width: 500px; height: 200px"></div>
    </div>
<!--grafico 3-->
    <div class="card-produto" style="background: #fff; margin:10px; border-radius: 10px; width:400px">
    <h1 style="color: #929190;">Estoque geral das lojas</h1>
      <p>Produtos - {{$motos}}</p>
      <p>Saída - {{$motosVendas}}</p>
    </div>

</div>

<script src="../js/roda.js"></script> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!--grafico 1-->

<!--@foreach ($vendasPorLoja as $vendaPorLoja)
<script type="text/javascript">
    google.charts.load('current', { packages: ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);
    var dadosParaGraficoPizza = JSON.parse('{!! $dadosParaGraficoPizzaJSON !!}');

console.log(dadosParaGraficoPizza)
    function drawChart() {
 
        var data = google.visualization.arrayToDataTable([
            ['Effort', 'Amount given'],
          ['My all',     100],
        ]);

        var options = {
            title: 'Vendas por Loja',
            pieHole: 0.5,
            colors: ['#e53935', '#929190'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
@endforeach
-->
<!--grafico 2-->
<script type="text/javascript">
   //var vendasPorLoja = JSON.parse('{!! $vendasPorLojaJSON !!}');
   //var vendasPorDia = JSON.parse('{!! $vendasPorDiaJSON !!}');
      google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
            ['Categoria', 'Quantidade Vendida'],

            @foreach($dadosParaGrafico as $dados)
                ['{{ $dados->categoria }}', {{ $dados->quantidade_vendida }}],
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

        function filtrar() {
        // Obtenha o valor selecionado no seletor
        var opcaoSelecionada = document.getElementById("opcaoFiltro").value;

        // Atualize os gráficos com base na opção selecionada
        // Adicione lógica aqui para chamar as funções ou APIs necessárias para atualizar os gráficos
        console.log("Filtrar por: " + opcaoSelecionada);
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

