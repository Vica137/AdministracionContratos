<?php
include "../modelo/inc_bd_connect.php"; // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el ID del alumno a eliminar desde el formulario
    $id_alumno = $_POST["id_alumno"];

    // Preparar la consulta SQL para eliminar el alumno
    $sql = "DELETE FROM alumno WHERE idalumno = $id_alumno";

    // Ejecutar la consulta y verificar si fue exitosa
    if (mysqli_query($connect, $sql)) {
        echo "Alumno eliminado correctamente.";
    } else {
        echo "Error al eliminar el alumno: " . mysqli_error($connect);
    }

    // Cerrar la conexión con la base de datos
    mysqli_close($connect);
} else {
    echo "Acceso denegado.";
}
?>

