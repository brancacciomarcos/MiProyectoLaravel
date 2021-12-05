<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Desarrollador Web, programador, back-end">
    <meta name="description" content="Estudiante en desarrollo web en busqueda de empleo, demuestra sus capacidades basicas.">
    <meta name="author" content="Brancaccio Marcos">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   
    <link rel="stylesheet" href="/estilos.css">
 
</head>

<body class="main">
    <header class="header">
        @include('partials.nav')
    </header>
    
    <div class='content'>
        @yield('content')
    </div>

    <footer class='footer'>
        <div class='iconos'>
            <div class='iconos-fila1'>
                <img src="img/icon-php.png" alt='PHP'>
                <img src="img/icon-html.png" alt='HTML'>
                <img src="img/icon-css.png" alt='CSS'>
                <img src="img/icon-js.png" alt='JS'>
            </div>

            <div class='iconos-fila2'>
                <img src="img/icon-bootstrap.png" alt='Bootstrap'>
                <img src="img/icon-jquery.png" alt='JQuery'>
                <img src="img/icon-github.png" alt='GitHub'>
                <img src="img/icon-git.png" alt='Git'>
            </div>

            <div class='iconos-fila3'>
                <img src="img/icon-mysql.png" alt='MySQL'>
                <img src="img/icon-laravel.png" alt='Laravel'>
                <img src="img/icon-vscode.png" alt='VSCode'>
            </div>
            
        </div>
    </footer>
</body>
</html>