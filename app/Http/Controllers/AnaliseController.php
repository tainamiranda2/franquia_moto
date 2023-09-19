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

        $regioes = [
            'Norte' => ['Acre', 'Amapá', 'Amazonas', 'Pará', 'Rondônia', 'Roraima', 'Tocantins'],
            'Nordeste' => ['Alagoas', 'Bahia', 'Ceará', 'Maranhão', 'Paraíba', 'Pernambuco', 'Piauí', 'Rio Grande do Norte', 'Sergipe'],
            'Sudeste' => ['Espírito Santo', 'Minas Gerais', 'Rio de Janeiro', 'São Paulo'],
            'Sul' => ['Paraná', 'Rio Grande do Sul', 'Santa Catarina'],
            'Centro-Oeste' => ['Distrito Federal', 'Goiás', 'Mato Grosso', 'Mato Grosso do Sul'],
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

    $regiaoComMaisVendas = '';
$vendasMaisAltas = 0;

foreach ($regioes as $regiao => $estados) {
    $vendasPorRegiao = 0;

    foreach ($estados as $estado) {
        foreach ($vendasPorLoja as $vendaLoja) {
            if (stripos($vendaLoja->nome_loja, $estado) !== false &&
                date('m', strtotime($vendaLoja->created_at)) == $mesAtual &&
                date('Y', strtotime($vendaLoja->created_at)) == $anoAtual) {
                $vendasPorRegiao += $vendaLoja->valor_total;
            }
        }
    }

    if ($vendasPorRegiao > $vendasMaisAltas) {
        $vendasMaisAltas = $vendasPorRegiao;
        $regiaoComMaisVendas = $regiao;
    }
}
    return view('analise', compact( 'vendasPorLojaJSON', 'vendasPorDiaJSON', 'lojaMaisVendida', 'regiaoComMaisVendas','vendasPorLoja', 'vendasPorDia', 'motos', 'lojas'));
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
