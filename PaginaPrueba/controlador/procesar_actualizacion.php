<?php
include "../modelo/inc_bd_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $no_cta = $_POST["no_cta"];
    $nombre = $_POST["nombre"];
    $ap_paterno = $_POST["ap_paterno"];
    $ap_materno = $_POST["ap_materno"];

    $sql = "UPDATE alumno SET nocta='$no_cta', noalumno='$nombre', appaterno='$ap_paterno', apmaterno='$ap_materno' WHERE idalumno='$id'";

    if (mysqli_query($connect, $sql)) {
        echo "Alumno actualizado correctamente.";
    } else {
        echo "Error al actualizar el alumno: " . mysqli_error($connect);
    }
} else {
    echo "No se recibieron datos para actualizar el alumno.";
}

mysqli_close($connect);
?>

