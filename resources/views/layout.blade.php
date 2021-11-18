<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Desarrollador Web, programador, back-end">
    <meta name="description" content="Estudiante en desarrollo web en busqueda de empleo, demuestra sus capacidades basicas.">
    <meta name="author" content="Brancaccio Marcos">
    <link rel="stylesheet" href="css/app.css">
    
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }
        .active a {
            color:rgb(133, 17, 228);
            text-decoration: none;
        }
        .main {
            background-image: url(https://img.freepik.com/foto-gratis/fondo-tecnologia-abstracta-codigo-programacion_34663-61.jpg?size=626&ext=jpg);
            
        }
    </style>
</head>

<body class="main">
        @include('partials.nav')
        @yield('content')
</body>
</html>