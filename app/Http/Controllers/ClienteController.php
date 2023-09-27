<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
class ClienteController extends Controller
{
    public function index(){
        //$Clientes=Cliente::All();
        
        return view('cliente');
    }
    public function create(Request  $request){
        $cliente=new Cliente;
        $cliente->nome=$request->nome;
        $cliente->email=$request->email;
        $cliente->cpf=$request->cpf;
        $cliente->telefone=$request->telefone;       

    $cliente->save();
    return redirect('/analise');
    }
}
