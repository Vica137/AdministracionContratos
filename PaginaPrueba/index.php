<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sp"> <!-- html extendido, estandar -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php include ('./vista/inc_header.html') ?> <!--codigo enbebido-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Alumnos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<center>
    <h1>Operaciones CRUD de Alumnos</h1>
	
	<a href="./modelo/ejercicio02.php">Inicia de sesion (alumno)</a>
	<p></p>
    <table>
        <tr>
            <th>CRUD</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <td><a href="./vista/formulario.php">Crear Nuevo Alumno (C)</a></td>
            <td>Crear un nuevo registro de alumno en la base de datos.</td>
        </tr>
        <tr>
            <td><a href="./modelo/ejercicio01.php">Mostrar Registros (R)</a></td>
            <td>Mostrar todos los registros de alumnos almacenados en la base de datos.</td>
        </tr>
        <tr>
            <td><a href="./vista/actualizar.php">Actualizar Alumno (U)</a></td>
            <td>Actualizar la información de un alumno existente en la base de datos.</td>
        </tr>
        <tr>
            <td><a href="./vista/eliminar.php">Eliminar Alumno (D)</a></td>
            <td>Eliminar un registro de alumno de la base de datos.</td>
        </tr>
    </table>

</center>
</body>
</html>

