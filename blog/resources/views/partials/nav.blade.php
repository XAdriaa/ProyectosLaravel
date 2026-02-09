<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navegacion</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a class="navbar-brand text-light mr-4" href="{{ route('inicio') }}">Inicio</a>
            <a class="nav-link text-light mx-3" href="{{ route('posts.index') }}">Posts</a>
            <a class="nav-link text-light mx-3" href="{{ route('posts.create') }}">Crear</a>
        </div>
    </div>
</nav>
</body>
</html>