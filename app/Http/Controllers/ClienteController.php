<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClienteController extends Controller
{
    public function index(){
        //$Clientes=Cliente::All();
        
        return view('cliente');
    }
}
