@extends('layouts.main')
@section('content')

<div class="styles">
    <div class="menu">
        <div class="item" id="btnAnalise">
            <a href="/home">
                <i class="fa-solid fa-chart-line"></i>
                Análises
            </a>
        </div>
        <div class="item" id="btnLoja">
            <a href="/loja">
            <i class="fa-solid fa-shop"></i>
            Lojas
            </a>
        </div>
        <div class="item" id="btnCliente">
            <a href="/cliente">
            <i class="fa-solid fa-user"></i>
            Clientes
            </a>
        </div>
        <div class="item" id="btnMoto">
            <a href="/moto">
            <i class="fa-solid fa-motorcycle"></i>
            Motos
            </a>
        </div>
        <div class="item" id="btnVenda">
            <a href="/venda">
            <i class="fa-solid fa-bag-shopping"></i>
            Vendas
            </a>
        </div>
        <div class="item" id="btnFornecedor">
            <a href="/fornecedor">
            <i class="fa-solid fa-users"></i>
            Fornecedores
            </a>
        </div>
    </div>
    <div class="conteudo">
        <div class="form">
            <h1>NÃO TEMOS ANÁLISES NO MOMENTO!!</h1>
            <div class="dados">
                
            </div>
        </div>
     </div> 
</div>
    <script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection