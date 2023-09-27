<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()-> getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=fo, initial-scale=1.0">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo')</title>

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
@include('layouts.navbar') 
<div class="container" id="landing">
    <img src="..\img\Camada_x0020_1.png" alt="" class="img_home">
    <div class="info">
        <h1>Tenha relatorios sobre a sua empresa, com dashboard interativos!</h1>
        <a href="/analise" type="button" class="btn">Entrar</a>
    </div>
</div>
