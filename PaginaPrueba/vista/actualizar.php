<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css"> 
    <title>Actualizar Alumno</title>
</head>
<body>
<center>
    <h1>Actualizar Alumno</h1>
    <form action="../controlador/procesar_actualizacion.php" method="POST">
        <label for="id">ID del Alumno a Actualizar:</label><br>
        <input type="text" id="id" name="id"><br>

        <label for="no_cta">Nuevo No. Cta.:</label><br>
        <input type="text" id="no_cta" name="no_cta"><br>

        <label for="nombre">Nuevo Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="ap_paterno">Nuevo Ap. Paterno:</label><br>
        <input type="text" id="ap_paterno" name="ap_paterno"><br>

        <label for="ap_materno">Nuevo Ap. Materno:</label><br>
        <input type="text" id="ap_materno" name="ap_materno"><br>

        <input type="submit" value="Actualizar">
    </form>
</center>
</body>
</html>

