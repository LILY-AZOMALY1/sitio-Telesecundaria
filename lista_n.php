<?php

$conexion=mysql_connect("localhost", "root") or die("Problemas al conectar el servidor");
			mysql_select_db("telesecundaria", $conexion) or die("Error al tratar de conectar con la base de dato");

			$resultado=mysql_query("SELECT * FROM datos_alumno ", $conexion); 

			
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charse="utf-8"/>
	<title>LISTA DE LOS ALUMNOS</title>
	<meta http-equiv="X-UA-Compatible" content="IE=9, crome"/>
	<meta name="copyright" content="Datasoft Engineering 2013"/>
	<meta name="author" content="ibarragen@behstant.com"/>
	<meta name="description" content="Query data sending an ID"/>
	<link rel="stylesheet"  href="../csc/style01.css">


</head>
<body>
<h1 align="center">LISTA DE LOS ALUMNOS</h1>
<CENTER>
<form   method="POST" action="alumno.php">
<table border="0.5" bordercolor="blue">
	<thead>
		<tr>
			<th bgcolor="66DDEE">No lista</th>
			<th bgcolor="66DDEE">Nombre</th>
			<th bgcolor="66DDEE">Apellidos</th>
			<th bgcolor="66DDEE">Grupo</th>
			<th bgcolor="66DDEE">Grado</th>
			<th bgcolor="66DDEE">Maestro</th>

		</tr>
	</thead>
	<tbody>
	 

		<?php  
         while ($fila=mysql_fetch_array($resultado)) { 
       ?>
			<tr>
					<td> 
					<a href="alumno.php"><input type="submit"  name="nol" value=<?php echo $fila['no_lista'];?> /></a></td>
					
					 <td> <?php echo $fila['nombre_alumno'];?></td>
					  <td> <?php echo $fila['apellidos']; ?></td>
					 <td> <?php echo $fila['grado']; ?></td>
					  <td><?php echo $fila['grupo'];?></td>
					   <td><?php echo $fila['nombre_maestro'];?></td><br> 
			</tr>
		<?php }?>

		</tbody>
			
		
</table>
</form>
<br>
<br>
<a href="panel.php"><button>REGRESAR</button></a>
 </CENTER>
 
<br>




 </body>
</html>
