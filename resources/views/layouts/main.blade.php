<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()-> getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=fo, initial-scale=1.0">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

         
</body>

<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="..\img\Icomoto.png" type="image/x-icon">
    <title>@yield('titulo')</title>
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- Fonte do Google --}}
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600;700&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    {{-- CSS da aplicação --}}
    <link rel="stylesheet" href="..\css\style.css">
  </head>
  <body>
    @include('layouts.navbar')
    @yield('content') 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="\js\script.js"></script>
  </body>
</html>