<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
class FornecedorController extends Controller
{
    public function index()
    {
        return view('fornecedor');
    }

    public function create(Request  $request){
        $fornecedor=new Fornecedor;
        $fornecedor->nome=$request->nome;
        $fornecedor->email=$request->email;
        $fornecedor->cpf_cnpj=$request->cpf_cnpj;
        $fornecedor->telefone=$request->telefone;       
        $fornecedor->cep=$request->cep;
    $fornecedor->save();
    return redirect('/analise');
    }
}
