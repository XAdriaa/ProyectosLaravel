<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="/js/app.js"></script>
    <title>@yield('titulo')</title>
</head>
<body>
    @include('partials.nav')
    
    <div style="text-align: right; padding: 10px 20px; background-color: #f8f9fa;">
        <small>{{ fechaActual('d/m/Y') }}</small>
    </div>
    
    <main>
        @yield('contenido')
    </main>
</body>
</html>