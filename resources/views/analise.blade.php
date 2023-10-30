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
        <option value="loja">Lojas</option>
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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

<!-- Adicione este link para o script do Google Charts se ainda não estiver incluído -->
<script type="text/javascript">
    // Função para desenhar o gráfico de moto
    function drawChartMoto(dadosGraficoMoto) {
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(function() {
            // Extraia as informações necessárias
            var motoMaisVendida = dadosGraficoMoto.motoMaisVendida;
            var vendasPorDia = dadosGraficoMoto.vendasPorDia;

            if (Array.isArray(vendasPorDia)) {
                // Crie um array para armazenar os dados
                var data = [['Dia', 'Quantidade de Vendas']];

                // Utilize um loop for para percorrer as vendas por dia
                for (var i = 0; i < vendasPorDia.length; i++) {
                    var vendaMoto = vendasPorDia[i];
                    data.push([vendaMoto.data, vendaMoto.quantidade_vendas]);
                }

                var options = {
                    title: 'Moto - ' + motoMaisVendida.nome_moto,
                    isStacked: true,
                    colors: ['#e53935', '#929190'],
                    hAxis: {
                        title: 'Dia'
                    },
                    vAxis: {
                        title: 'Quantidade de Vendas'
                    }
                };

                var chart = new google.visualization.ColumnChart(document.getElementById('chat_combinacao'));

                chart.draw(google.visualization.arrayToDataTable(data), options);
            }
        });
    }

    // Função para desenhar o gráfico de funcionário
    function drawChartFuncionario(dadosGraficoFun) {
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(function() {
            // Extraia as informações necessárias
            var funcionarioMaisVendedor = dadosGraficoFun.funcionarioMaisVendedor;
            var vendasPorDia = dadosGraficoFun.vendasPorDia;

            if (Array.isArray(vendasPorDia)) {
                // Crie um array para armazenar os dados
                var data = [['Dia', 'Quantidade de Vendas']];

                // Utilize um loop for para percorrer as vendas por dia
                for (var i = 0; i < vendasPorDia.length; i++) {
                    var vendaDia = vendasPorDia[i];
                    data.push([vendaDia.data, vendaDia.quantidade_vendas]);
                }

                var options = {
                    title: 'Funcionário - ' + funcionarioMaisVendedor.nome_funcionario,
                    isStacked: true,
                    colors: ['#e53935', '#929190'],
                    hAxis: {
                        title: 'Dia'
                    },
                    vAxis: {
                        title: 'Quantidade de Vendas'
                    }
                };

                var chart = new google.visualization.ColumnChart(document.getElementById('chat_combinacao'));

                chart.draw(google.visualization.arrayToDataTable(data), options);
            }
        });
    }

    //filtro por vendas
  // Função para desenhar o gráfico de loja
function drawChartLoja(dadosGraficoLoja) {
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(function() {
        // Extraia as informações necessárias
        var lojaMaisVendida = dadosGraficoLoja.lojaMaisVendida;
        var vendasPorDia = dadosGraficoLoja.vendasPorDia;

        if (Array.isArray(vendasPorDia)) {
            // Crie um array para armazenar os dados
            var data = [['Dia', 'Quantidade de Vendas']];

            // Utilize um loop for para percorrer as vendas por dia
            for (var i = 0; i < vendasPorDia.length; i++) {
                var vendaDia = vendasPorDia[i];
                data.push([vendaDia.data, vendaDia.quantidade_vendas]);
            }

            var options = {
                title: 'Loja - ' + lojaMaisVendida.nome_loja,
                isStacked: true,
                colors: ['#e53935', '#929190'],
                hAxis: {
                    title: 'Dia'
                },
                vAxis: {
                    title: 'Quantidade de Vendas'
                }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chat_combinacao'));

            chart.draw(google.visualization.arrayToDataTable(data), options);
        }
    });
}


    // Função principal para filtrar
    function filtrar() {
        // Obtenha o valor selecionado no seletor
        var opcaoFiltro = $("#opcaoFiltro").val();

        // Se nenhum valor estiver selecionado, defina a opção padrão como 'loja'
        if (!opcaoFiltro) {
            opcaoFiltro = 'loja';
        }

        console.log("Filtrar por: " + opcaoFiltro);

        // Use um switch para determinar qual função de desenho chamar com base na opção selecionada
        switch (opcaoFiltro) {
            case 'loja':
                //console.log("loja");
             //   drawChartLoja()
             drawChartLoja({!! $dadosGraficoLoja !!});
                break;
            case 'moto':
                // Chame a função específica para desenhar o gráfico de moto
                drawChartMoto({!! $dadosGraficoMoto !!});
                break;
            case 'funcionario':
                // Chame a função específica para desenhar o gráfico de funcionário
                drawChartFuncionario({!! $dadosGraficoFun !!});
                break;
            default:
                console.error('Opção de filtro desconhecida: ' + opcaoFiltro);
        }
    }

    // Chame a função para definir a opção padrão ao carregar a página
    filtrar();
</script>


    <!--grafico 3-->
    <script>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

     function drawChart() {
        var data = google.visualization.arrayToDataTable([
        
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