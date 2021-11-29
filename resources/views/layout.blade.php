<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Desarrollador Web, programador, back-end">
    <meta name="description" content="Estudiante en desarrollo web en busqueda de empleo, demuestra sus capacidades basicas.">
    <meta name="author" content="Brancaccio Marcos">
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/estilos.css">
    <script src="https://kit.fontawesome.com/5585235f4d.js" crossorigin="anonymous"></script>
</head>

<body class="main">
    <header class="header">
        @include('partials.nav')
    </header>
    
    @yield('content')
    
</body>
</html>