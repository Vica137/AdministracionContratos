<?php
include "inc_bd_connect.php";

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST["id"];
    $no_cta = $_POST["no_cta"];
    $nombre = $_POST["nombre"];
    $ap_paterno = $_POST["ap_paterno"];
    $ap_materno = $_POST["ap_materno"];

    // Preparar la consulta SQL para insertar los datos en la tabla de alumnos
    $sql = "INSERT INTO alumno (idalumno, nocta, noalumno, appaterno, apmaterno)
            VALUES ('$id', '$no_cta', '$nombre', '$ap_paterno', '$ap_materno')";

    // Ejecutar la consulta y verificar si fue exitosa
    if (mysqli_query($connect, $sql)) {
        echo "Registro insertado exitosamente.";
    } else {
        echo "Error al insertar el registro: " . mysqli_error($connect);
    }
} else {
    echo "No se recibieron datos del formulario.";
}

// Cerrar la conexión con la base de datos
mysqli_close($connect);
?>
