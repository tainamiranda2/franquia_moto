@extends('layouts.main')
@yield('Save')
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
            <h1>Cliente</h1>
            <div class="dados">
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite o nome da loja">
                </div>
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite o nome da loja">
                </div>
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite o nome da loja">
                </div>
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">CPF:</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite o nome da loja">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-save">Salvar</button>
                <button type="button" class="btn btn-cancel">Cancelar</button>
            </div>
        </div>
    </div>
</div>
    <script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection