<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto</title>
    <!-- Incluir estilos de Bootstrap -->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">    

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
 <nav class="navbar navbar-expand-lg bg-nav"><!-- Imagen a la izquierda -->
        <img src="media/icon kosmos.png" width="40" height="40" class="d-inline-block align-top" alt="">
        <div class="container"> <!-- Agrega un contenedor para centrar los elementos -->
            <ul class="navbar-nav justify-content-between w-100"> <!-- Utiliza justify-content-between para distribuir simétricamente -->
                <li class="nav-item">
                    <a class="nav-link " href="index.php"> <img src="media/nav icons/home.png" width="30" height="30" class="mr-1">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contratos.html"> <img src="media/nav icons/contratos.png" width="30" height="30" class="mr-1"> Contratos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link here" href="psrp.html"> <img src="media/nav icons/prsp.png" width="30" height="30" class="mr-1"> Presupuestos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="activos.html"> <img src="media/nav icons/activos.png" width="30" height="30" class="mr-1"> Activos Informáticos</a>
                </li>
            </ul>
        </div>
    </nav> 


<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tabla de Presupuesto</h1>

<?php
$servername = "localhost";
$username = "vica137";
$password = "0litas.";
$database = "administracionContratos";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
 // Consulta SQL para seleccionar todos los registros de la tabla presupuesto

        $sql = "SELECT * FROM presupuesto";
        $result = $conn->query($sql);

        // Mostrar la tabla si hay resultados
        if ($result->num_rows > 0) {
            echo "<table class='table'>";
            echo "<thead><tr><th>ID</th><th>Localidad</th><th>Oficina</th><th>Razón Social</th><th>Fecha Inicio</th><th>Fecha Fin</th><th>Periodo</th><th>Monto</th><th>ID Cedi</th><th>ID Proveedor</th><th>ID Proyecto</th><th>ID Empresa</th></tr></thead>";
            echo "<tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["idPresupuesto"] . "</td>";
                echo "<td>" . $row["localidad"] . "</td>";
                echo "<td>" . $row["oficina"] . "</td>";
                echo "<td>" . $row["razonSocial"] . "</td>";
                echo "<td>" . $row["fechaInicio"] . "</td>";
                echo "<td>" . $row["fechaFin"] . "</td>";
                echo "<td>" . $row["periodo"] . "</td>";
                echo "<td>" . $row["monto"] . "</td>";
                echo "<td>" . $row["idCedi"] . "</td>";
                echo "<td>" . $row["idProveedor"] . "</td>";
                echo "<td>" . $row["idProyecto"] . "</td>";
                echo "<td>" . $row["idEmpresa"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "No se encontraron resultados";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </div>

    <!-- Incluir scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<footer class="mt-5">
    <div class="container">
        <h2 class="text-center">CONTACTO</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="seccionPie">
                    <p>Av. Lomas de Sotelo 1094,<br>
                    Col. Loma Hermosa, <br>
                    Del. Miguel Hidalgo, México, D.F<br>
                    C.P. 11200</p><br>
                    <p><a href="mailto:licitaciones@ck.com.mx">licitaciones@ck.com.mx</a><br>
                    Tel. +52 (55) 2282-2600</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="seccionPie">
                    <p>Si deseas formar parte de nuestro equipo de trabajo, <br>envía tu CV a:</p><br>
                    <p>• D.F. y Área Metropolitana: <br>
                    <a href="mailto:reclutamiento@ck.com.mx">reclutamiento@ck.com.mx</a></p><br>
                    <p>• Interior de la República Mexicana: <br>
                    <a href="mailto:reclutamientoforaneo@ck.com.mx">reclutamientoforaneo@ck.com.mx</a></p><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="seccionPie kit">
                    <img src="imagen1.png" class="logoFooter img-fluid">
                </div>
            </div>
        </div>
    </div>



        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="text-muted">© Todos los derechos reservados | <a href="aviso-de-privacidad.html" class="text-muted">Aviso de privacidad</a> | <a href="http://ck.canaletico.app" target="_blank" class="text-muted">Canal ético</a> | <a href="Codigo de Ética 2020.pdf" target="_blank" class="text-muted">Código de ética</a></p>
            </div>
            <div class="col-md-6">
                <div id="menuPanel" class="menuPanelHome">
                    <ul class="list-unstyled d-flex justify-content-end">
                        <li class="ml-3"><a href="#nosotros" class="text-muted">NOSOTROS</a></li>
                        <li class="ml-3"><a href="#empresas" class="text-muted">EMPRESAS</a></li>
                        <li class="ml-3"><a href="#sustentabilidad" class="text-muted">SUSTENTABILIDAD</a></li>
                        <li class="ml-3"><a href="#fundacion" class="text-muted">FUNDACIÓN</a></li>
                        <li class="ml-3"><a href="sala-de-prensa.html" class="text-muted">SALA DE PRENSA</a></li>
                        <li class="ml-3"><a href="#contacto" class="text-muted">CONTACTO</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>
