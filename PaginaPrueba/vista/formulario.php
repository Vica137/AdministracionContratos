<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../style.css"> 
    <title>Formulario de Registro</title>
</head>
<body>
<center>
    <h2>Formulario de Registro de Alumnos</h2>
    <form action="../controlador/procesar_registro.php" method="POST">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br>

        <label for="no_cta">No. Cta.:</label><br>
        <input type="text" id="no_cta" name="no_cta"><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="ap_paterno">Ap. Paterno:</label><br>
        <input type="text" id="ap_paterno" name="ap_paterno"><br>

        <label for="ap_materno">Ap. Materno:</label><br>
        <input type="text" id="ap_materno" name="ap_materno"><br>

        <input type="submit" value="Insertar Registro">
    </form>
</center>
</body>
</html>
