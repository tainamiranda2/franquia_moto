<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function index()
    {
        $mesAtual = date('m');
        $anoAtual = date('Y');

        $meses = [
            'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ];
        

        $vendasPorLoja = Venda::select('loja.nome as nome_loja', DB::raw('SUM(venda.valor_total) as valor_total'))
        ->join('loja', 'venda.loja_id', '=', 'loja.id')
        //->whereMonth('venda.created_at', '=', $mesAtual)
        //->whereYear('venda.created_at', '=', $anoAtual)

        ->groupBy('loja.nome')
        ->orderBy('loja.nome')

        ->orderByDesc('valor_total')
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



    return view('analise', compact( 
        'vendasPorLojaJSON', 
        'vendasPorMes',
        'resultadosPorMes',
    'vendasPorDiaJSON', 
    'lojaMaisVendida', 
    'regiaoComMaisVendas',
    'vendasPorLoja', 
    'vendasPorDia',
     'motos',
     'lojas'));
     //  return view('analise');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
