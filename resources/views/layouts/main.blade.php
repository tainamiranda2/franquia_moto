<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()-> getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=fo, initial-scale=1.0">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="shortcut icon" href="..\img\Icomoto.png" type="image/x-icon">
        <link rel="stylesheet" href="..\css\reset.css">
        {{-- Fonte do Google --}}
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600;700&family=Ubuntu:wght@500&display=swap" rel="stylesheet">

        {{-- CSS Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        {{-- CSS da aplicação --}}
        <link rel="stylesheet" href="..\css\style.css">
        <script src="\js\script.js"></script>
    </head>
    <body>
    <div>
        <header>
            <nav class="navbar">
                <a href="/" class="logo">Mdados</a>
                {{-- <a href="">Honda</a>  --}}
            </nav>
        </header>
    
<div class="styles">
    <div class="menu">
        <div class="item" id="btnAnalise">
            <a href="/analise">
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
        <div class="item" id="btnSair">
            <a href="/">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            Sair
            </a>
        </div>
        <div class="bars" id="btnSair" style="display: none;">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    @yield('content')  
</div>
</body>