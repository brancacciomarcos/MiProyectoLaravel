<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }
        .active a {
            color:red;
            text-decoration: none;
        }
        .main {
            background-image: url(https://img.freepik.com/foto-gratis/fondo-tecnologia-abstracta-codigo-programacion_34663-61.jpg?size=626&ext=jpg);
            width: 100;
            height: 100;
            position: absolute;
        }
    </style>
    <link rel="stylesheet" href="css/stilo.css">
</head>

<body class="main">
        @include('partials.nav')
        @yield('content')
</body>
</html>