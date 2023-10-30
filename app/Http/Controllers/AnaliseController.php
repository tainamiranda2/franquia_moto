<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Venda;
use App\Loja;
use App\Moto;
class AnaliseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mesAtual = date('m');
        $anoAtual = date('Y');

        $meses = [
            'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ];
        

      /*  $vendasPorLoja = Venda::select('loja.nome as nome_loja', DB::raw('SUM(venda.valor_total) as valor_total'))
        ->join('loja', 'venda.loja_id', '=', 'loja.id')
        //->whereMonth('venda.created_at', '=', $mesAtual)
        //->whereYear('venda.created_at', '=', $anoAtual)

        ->groupBy('loja.nome')
        ->orderBy('loja.nome')

        ->orderByDesc('valor_total')
        ->take(4)
        ->get();
*/
$vendasPorLoja = Venda::select('loja.nome as nome_loja', DB::raw('SUM(venda.valor_total) as valor_total'))
    ->join('loja', 'venda.loja_id', '=', 'loja.id')
    //->whereMonth('venda.created_at', '=', $mesAtual)
    //->whereYear('venda.created_at', '=', $anoAtual)
    ->groupBy('loja.nome')
    ->orderByDesc('valor_total') // Ordena em ordem decrescente pelo valor total
    ->take(4) // Limita os resultados às 4 lojas com maiores vendas
    ->get();

        $lojaMaisVendida = $vendasPorLoja->first();

        $vendasPorDia = DB::table('venda')
        ->select(DB::raw('DATE(venda.created_at) as data'), DB::raw('COUNT(*) as quantidade_vendas'))
        ->whereMonth('venda.created_at', '=', $mesAtual)
        ->whereYear('venda.created_at', '=', $anoAtual)
        ->groupBy('data')
        ->orderBy('data')
        ->get();


    $lojas = Loja::all();
    $motos = Moto::all();

    $vendasPorLojaJSON = json_encode($vendasPorLoja);
    $vendasPorDiaJSON = json_encode($vendasPorDia);

    $resultadosPorMes = DB::select("
        SELECT
            DATE_FORMAT(created_at, '%M') AS mes,
            MAX(valor_total) AS max,
            MIN(valor_total) AS min
        FROM
            venda
        WHERE
            YEAR(created_at) = ?
        GROUP BY
            mes
        ORDER BY
            mes
    ", [$anoAtual]);

    $motosVendas = DB::table('venda')->count();

    $motos = DB::table('moto')->count();

    $dadosParaGraficoPizza = [];
foreach ($vendasPorLoja as $vendaPorLoja) {
    $dadosParaGraficoPizza[$vendaPorLoja->nome_loja] = $vendaPorLoja->valor_total;
}

$dadosParaGraficoPizzaJSON = json_encode($dadosParaGraficoPizza);
//grafico dois



    // Consulta para obter as informações relacionadas a motas
   $dadosParaGraficoMoto = $this->getDadosPorMota();
    $dadosParaGraficoFun = $this->getDadosPorFuncionario();
$dadosGraficoLoja=$this->getDadosPorLoja();

$dadosGraficoMoto = json_encode($dadosParaGraficoMoto );
$dadosGraficoFun = json_encode( $dadosParaGraficoFun);
$dadosGraficoLoja=json_encode($dadosGraficoLoja);



//dd($filtro);
//var_dump($dadosGraficoLoja);

    return view('analise', compact( 
        'dadosGraficoFun',
        'dadosGraficoMoto',
       'dadosParaGrafico',
       'dadosGraficoLoja',
       //novos
        'vendasPorLojaJSON', 
        'vendasPorMes',
        'resultadosPorMes',
     
    'regiaoComMaisVendas',
    'vendasPorLoja', 
    'vendasPorDia',
    //ta ai
     'motos',
     'motosVendas',
     'dadosParaGraficoPizzaJSON',
     'lojas'));
     //  return view('analise');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDadosPorFuncionario()
    {
        // Obtém o funcionário que mais vendeu no mês atual
    $funcionarioMaisVendedor = Venda::select('funcionario.nome as nome_funcionario')
    ->join('funcionario', 'venda.funcionario_id', '=', 'funcionario.id')
    ->select('funcionario.nome as nome_funcionario', DB::raw('COUNT(*) as quantidade_vendida'))
    ->whereMonth('venda.created_at', '=', now()->month)
    ->groupBy('funcionario.nome')
    ->orderByDesc('quantidade_vendida')
    ->take(1)
    ->first();

// Obtém a quantidade de vendas por dia no mês atual
$vendasPorDia = Venda::select(DB::raw('DATE(venda.created_at) as data'), DB::raw('COUNT(*) as quantidade_vendas'))
    ->whereMonth('venda.created_at', '=', now()->month)
    ->groupBy('data')
    ->orderBy('data')
    ->get();

// Retorna um array associativo com os resultados
return [
    'funcionarioMaisVendedor' => $funcionarioMaisVendedor,
    'vendasPorDia' => $vendasPorDia,
];
    }
    
    public function getDadosPorMota()
    {
        // Obtém a moto que mais vendeu no mês atual
        $motoMaisVendida = Venda::select('moto.nome as nome_moto')
        ->join('moto', 'venda.moto_id', '=', 'moto.id')
        ->select('moto.nome as nome_moto', DB::raw('COUNT(*) as quantidade_vendida'))
        ->whereMonth('venda.created_at', '=', now()->month)
        ->groupBy('moto.nome')
        ->orderByDesc('quantidade_vendida')
        ->take(1)
        ->first();

    // Obtém a quantidade de vendas por dia no mês atual
    $vendasPorDia = Venda::select(DB::raw('DATE(venda.created_at) as data'), DB::raw('COUNT(*) as quantidade_vendas'))
        ->whereMonth('venda.created_at', '=', now()->month)
        ->groupBy('data')
        ->orderBy('data')
        ->get();

    // Retorna um array associativo com os resultados
    return [
        'motoMaisVendida' => $motoMaisVendida,
        'vendasPorDia' => $vendasPorDia,
    ];
    }
    

public function getDadosPorLoja()
{
    // Obtém a loja que mais vendeu no mês atual
    $lojaMaisVendida = Venda::select('loja.nome as nome_loja')
        ->join('loja', 'venda.loja_id', '=', 'loja.id')
        ->select('loja.nome as nome_loja', DB::raw('SUM(venda.valor_total) as valor_total'))
        ->whereMonth('venda.created_at', '=', now()->month)
        ->groupBy('loja.nome')
        ->orderByDesc('valor_total')
        ->take(1)
        ->first();

    // Obtém a quantidade de vendas por dia no mês atual
    $vendasPorDia = Venda::select(DB::raw('DATE(venda.created_at) as data'), DB::raw('COUNT(*) as quantidade_vendas'))
        ->whereMonth('venda.created_at', '=', now()->month)
        ->groupBy('data')
        ->orderBy('data')
        ->get();

    // Retorna um array associativo com os resultados
    return [
        'lojaMaisVendida' => $lojaMaisVendida,
        'vendasPorDia' => $vendasPorDia,
    ];
}
}