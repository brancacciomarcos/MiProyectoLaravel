<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Desarrollador Web, programador, back-end">
    <meta name="description" content="Estudiante en desarrollo web en busqueda de empleo, demuestra sus capacidades basicas.">
    <meta name="author" content="Brancaccio Marcos">
    <link rel="stylesheet" href="/estilos.css">
</head>

<body class="main">
    <header>
        @include('partials.nav')
    </header>

    @yield('content')
</body>
</html>