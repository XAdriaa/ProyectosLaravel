<?php


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
</head>
<body>
    <nav>
        <a href="{{route('inicio')}}"></a>
        <a href="{{route('posts_listado')}}"></a>
    </nav>
    @yield('contenido')
</body>
</html>