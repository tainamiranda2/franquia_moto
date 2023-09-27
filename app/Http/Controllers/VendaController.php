<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Cliente;
use App\Loja;
use App\Funcionario;
use App\Moto;
use App\Metodo_Pagamento;
class VendaController extends Controller
{
    public function index()
    {
        //$venda = Venda::all();
    $clientes = Cliente::all();
    $lojas = Loja::all();
    $funcionarios = Funcionario::all();
    $motos = Moto::all();
    $metodosPagamento = Metodo_Pagamento::all();

    return view('venda', compact( 'clientes', 'lojas', 'funcionarios', 'motos', 'metodosPagamento'));
       // return view('venda');
    }
    public function create(Request  $request){
        $venda=new Venda;
        $venda->descricao=$request->descricao;
        $venda->valor_total=$request->valor_total;
        $venda->cliente_id=$request->cliente_id;
        $venda->funcionario_id=$request->funcionario_id;       
        $venda->loja_id=$request->loja_id;
        $venda->moto_id=$request->moto_id;
        $venda->metodo_pagamento_id=$request->metodo_pagamento_id;

        $venda->save();
    return redirect('/analise');
    }
}
