<?php 
//Conexión a la base de datos destino
	$connect = mysqli_connect("localhost", "fabiola", "0litas", "alumnos");
	

	if ($connect) { // si la conexion fue exitosa
		
		print "OK ->La base de datos alumno  est&aacute;  conectada<br/>";		
	} else{
		print "ERROR ->No se logr&oacute; conectar a la base de datos, consulte al administrador del sistema.<br/>";
	}
?>
