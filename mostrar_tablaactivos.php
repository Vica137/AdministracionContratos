<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Activos Informáticos</title>
    <!-- Incluir estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tabla de Activos Informáticos</h1>

        <?php
        // Incluir el archivo que contiene la clase Connect
$servername = "localhost";
$username = "vica137";
$password = "0litas.";
$database = "administracionContratos";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

	$sql = "SELECT * FROM activoInformatico";
	
        $result = $connection->query($sql);

        // Mostrar la tabla si hay resultados
        if ($result->num_rows > 0) {
            echo "<table class='table'>";
            echo "<thead><tr><th>ID Activo</th><th>Nombre</th><th>Categoría</th><th>ID Subcategoría</th></tr></thead>";
            echo "<tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["idActivoInformatico"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["categoria"] . "</td>";
                echo "<td>" . $row["idSubcategoria"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "No se encontraron resultados";
        }

        // Cerrar la conexión
        $connection->close();
        ?>
    </div>

    <!-- Incluir scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

