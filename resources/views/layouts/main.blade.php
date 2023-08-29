<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()-> getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=fo, initial-scale=1.0">
        
        <title>@yield('titulo')</title>
        
        <link rel="stylesheet" href="..\css\reset.css">
        {{-- Fonte do Google --}}
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600;700&family=Ubuntu:wght@500&display=swap" rel="stylesheet">

        {{-- CSS Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        {{-- CSS da aplicação --}}
        <link rel="stylesheet" href="..\css\style.css">
        <script src="\js\scripts.js"></script>

    </head>
    <body>
        <header>
            <nav class="navbar">
                <a href="/" class="logo">Mdados</a>
                {{-- <a href="">Honda</a>  --}}
            </nav>
        </header>
    
    @yield('content')  

    </body>