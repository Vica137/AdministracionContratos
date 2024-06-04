<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../style.css"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Alumno</title>
</head>
<body>
<center>
    <h2>Eliminar Alumno</h2>
    <form action="../controlador/eliminar_alumno.php" method="post">
        <label for="id_alumno">ID del Alumno a Eliminar:</label><br>
        <input type="text" id="id_alumno" name="id_alumno"><br><br>
        <input type="submit" value="Eliminar">
    </form>

</center>
</body>
</html>

