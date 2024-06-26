<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LandIT Inicio</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/act.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<header>
    <?php
    // Determina la página actual
    $current_page = basename($_SERVER['PHP_SELF'], ".php");
    ?>
    <nav class="navbar navbar-expand-lg bg-nav">
        <img src="{{ asset('media/icon kosmos.png') }}" width="40" height="40" class="d-inline-block align-top" alt="">
        <div class="container">
            <div class="d-flex justify-content-between w-100">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $current_page == 'index' ? 'here' : '' }}" href="index.php">
                            <img src="{{ asset('media/nav icons/home.png') }}" width="30" height="30" class="mr-1">Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $current_page == 'contratos' ? 'here' : '' }}" href="contratos.php">
                            <img src="{{ asset('media/nav icons/contratos.png') }}" width="30" height="30" class="mr-1">Contratos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $current_page == 'psrp' ? 'here' : '' }}" href="psrp.php">
                            <img src="{{ asset('media/nav icons/prsp.png') }}" width="30" height="30" class="mr-1">Presupuestos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $current_page == 'activos' ? 'here' : '' }}" href="activosI.php">
                            <img src="{{ asset('media/nav icons/activos.png') }}" width="30" height="30" class="mr-1">Activos Informáticos
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="bi bi-box-arrow-right" style="font-size: 1.5rem;" href="inicioSesion.php"></i> Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
</body>
</html>

