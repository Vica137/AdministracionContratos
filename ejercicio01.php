<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php include ('inc_header.html') ?>
</head>

<body>
<div id="container">
<?php
	include ("inc_bd_connect.php");
		
		$result = mysqli_query($connect, "SELECT * FROM alumno");
		if ($result)
		{
			
			$registros= mysqli_num_rows($result);
			
			echo "<p> Número de registros: ". $registros ." </p> \n"; 

			echo "<table border = '1'> \n"; 

            while($row=mysqli_fetch_array($result)){
             		echo "<tr>
                     <td align='right'> $row[idalumno] </td>
                     <td> $row[noalumno] </td>
                     <td> $row[appaterno] </td>
                     <td> $row[apmaterno] </td>
                     <td> $row[nocta] </td>
                  </tr>";}

            echo "</table>";

			mysqli_free_result($result);

		}   

    mysqli_close($connect);
	include ('inc_footer.html') 
?>

</body>
</html>
