<?php
$res=$_REQUEST['nol'];

$conexion=mysql_connect("localhost", "root") or die("Problemas al conectar el servidor");
			mysql_select_db("telesecundaria", $conexion) or die("Error al tratar de conectar con la base de dato");

			$resultado=mysql_query("SELECT * FROM datos_alumno where no_lista='".$res."'", $conexion); 

			
?>

	
<!DOCTYPE html>
<html>
<head>
	
	<title>Personal administrativo</title>
	<meta charset="utf-8">
</head>
<body>
<div>
	
	<CENTER>
		<p>
			<B>Alumno</B>
		</p>
		
		<br>
		<br>
	
</CENTER>

<table border="0.5">
	<thead>
		<tr>
			<th bgcolor="66DDEE">Datos del alumno</th>
	

		</tr>
	</thead>
	<tbody>
	 

		<?php  
         while ($fila=mysql_fetch_array($resultado)) { 
       			
       ?>
			<tr>
				<td>No Lista:<br> 
		    		Nombre:<br>
		    		Apellidos:<br>
					Grupo:<br>
					Grado:<br>
					Maestro:<br>
					Nombre del Padre:<br>
					Nombre de la Madre:<br>
					Dirección:<br>
					Teléfono de casa:<br>
					Teléfono celular:<br>
					</td>
					
					<td> <?php echo $fila['no_lista'];?><br>
					 <?php echo $fila['nombre_alumno'];?><br>
					  <?php echo $fila['apellidos'];?><br>
					 <?php echo $fila['grado']; ?><br>
					 <?php echo $fila['grupo'];?><br>
					 <?php echo $fila['nombre_maestro'];?><br>
					 <?php echo $fila['nombre_padre'];?><br>
					 <?php echo $fila['nombre_madre'];?><br>
					 <?php echo $fila['direccion'];?><br>
					 <?php echo $fila['telefono_casa'];?><br>
					 <?php echo $fila['telefono_cel'];?> <br>
					</td>

					<td>
					<form action="calificaciones.php"  method="post">
					<a href="calificaciones.php"><button type="submit"  name= "cal" value=<?php echo  $fila['no_lista'];?>>Ver calificaciones</button></a>
					</form>
					<br>
					<br>
					<form method="POST" action="eliminar.php">
					<a href="eliminar.php"><button type="submit"  name= "cal" value=<?php echo  $fila['no_lista'];?>>eliminar datos reportes</button></a>
					</form>
					<br>

					
					</td>
			</tr>
		
		<?php 
			
		break;
			}
		
		?>


		

		</tbody>
			
		
</table>

</div>
<br>
<br>
<a href="lista_n.php"><button>REGRESAR</button></a>
</body>
</html>