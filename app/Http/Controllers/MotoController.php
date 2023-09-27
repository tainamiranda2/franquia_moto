<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moto;
use App\Loja;
use App\Fornecedor;
class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lojas = Loja::all();
        $fornecedores = Fornecedor::all();

        return view('moto', compact( 'fornecedores', 'lojas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request  $request){
        $moto=new Moto;
        $moto->nome=$request->nome;
        $moto->ano=$request->ano;
        $moto->marca=$request->marca;
        $moto->modelo=$request->modelo;
        $moto->preco=$request->preco;       
        $moto->loja_id=$request->loja_id;
        //esta escrito assim no banco
        $moto->forncedor_id=$request->forncedor_id;   
    $moto->save();
    return redirect('/analise');
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
