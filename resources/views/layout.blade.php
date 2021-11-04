<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        .active a {
            color:red;
            text-decoration: none;
        }
        .main {
            background-image: url(https://www.google.com/imgres?imgurl=https%3A%2F%2Fimg.freepik.com%2Ffoto-gratis%2Ffondo-tecnologia-abstracta-codigo-programacion_34663-61.jpg%3Fsize%3D626%26ext%3Djpg&imgrefurl=https%3A%2F%2Fwww.freepik.es%2Ffotos-vectores-gratis%2Fprogramacion-web&tbnid=ay9QP36KWAMcmM&vet=12ahUKEwjSn-2Us__zAhXPJbkGHfLLCYgQMygBegUIARCzAQ..i&docid=zOEilJBf6WCWSM&w=626&h=521&q=imagenes%20programacion%20para%20usar%20de%20fondo%20en%20una%20pagina%20web&ved=2ahUKEwjSn-2Us__zAhXPJbkGHfLLCYgQMygBegUIARCzAQ)
        }
    </style>
    <link rel="stylesheet" href="css/stilo.css">
</head>

<body>
    <div class="main">
        @include('partials.nav')
        @yield('content')
    </div>
</body>
</html>