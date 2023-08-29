@extends('layouts.main')
@section('content')

<div class="styles">
    <div class="menu">
        <div class="item">
            <a href="/home" class="menuBtn">
                <i class="fa-solid fa-chart-line"></i>
                Análises
            </a>
        </div>
        <div class="item">
            <a href="/">
            <i class="fa-solid fa-shop"></i>
            Lojas
            </a>
        </div>
        <div class="item">
            <a href="/">
            <i class="fa-solid fa-user"></i>
            Clientes
            </a>
        </div>
        <div class="item">
            <a href="/">
            <i class="fa-solid fa-motorcycle"></i>
            Motos
            </a>
        </div>
        <div class="item">
            <a href="/">
            <i class="fa-solid fa-bag-shopping"></i>
            Vendas
            </a>
        </div>
        <div class="item">
            <a href="/">
            <i class="fa-solid fa-users"></i>
            Fornecedores
            </a>
        </div>
    </div>
    <div class="conteudo">
        <h1>Loja</h1>
        <div class="dados">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" placeholder="Digite o nome da loja">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">descrição</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
        </div>
    </div>
</div>
    <script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection