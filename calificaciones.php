<?php
$res=$_REQUEST['cal'];

$conexion=mysql_connect("localhost", "root") or die("Problemas al conectar el servidor");
			mysql_select_db("telesecundaria", $conexion) or die("Error al tratar de conectar con la base de dato");

			$resultado=mysql_query("SELECT * FROM datos_alumno where no_lista='".$res."'", $conexion); 
			$cali=mysql_query("SELECT * FROM historial_academico where m_no_lista='".$res."'", $conexion); 

	
?>

	
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Personal administrativo/datos del amulno/agregar calificaciones</title>
	
</head>
<body>
<div>
	
	<CENTER>
		<p>
			<B>Agregar Calificaciones del Alumno</B>
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
		    		Apellidos<br>
					Grupo:<br>
					Grado:<br>
					Maestro:<br>
				</td>
				
				<td> <?php echo $fila['no_lista'];?><br>
					 <?php echo $fila['nombre_alumno'];?><br>
					 <?php echo $fila['apellidos']; ?><br>
					 <?php echo $fila['grado']; ?><br>
					 <?php echo $fila['grupo'];?><br>
					 <?php echo $fila['nombre_maestro'];?><br>

					 </td>
			</tr>
		
		<?php 
			
		break;
			}
		
		?>
	</tbody>

	</table>

	<table border="1">
	<thead>
		<tr>
			<th bgcolor="blue">Calificaciones</th>
			</tr>

			<tr>
       <td>MATERIA</td>
	   <td>1ER BIMESTRE</td><td>2DO BIMESTRE</td><td>3ER BIMESTRE</td><td>4TO BIMESTRE</td><td>5TO BIMESTRE</td>
       

       </tr>
	<?php  
         while ($cals=mysql_fetch_array($cali)) { 
       		
       ?>

       
       <tr>
       
       <td> <?php echo $cals['materia'];?></td>
		<td> <input type="text" name"1er"  value=<?php echo $cals['1er_bimestre'];?> /></td>
		
		<td> <input type="text" name"2do"  value=<?php echo $cals['2do_bimestre'];?> /></td>
		<td> <input type="text" name"3er"  value=<?php echo $cals['3er_bimestre'];?> /></td>
		<td> <input type="text" name"4to"  value=<?php echo $cals['4to_bimestre'];?> /></td>
		<td> <input type="text" name"5to"  value=<?php echo $cals['5to_bimestre'];?> /></td>

		<?php 
			
		
			}

	
		?>
		</tr>
		<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		<tr>
		<td>Promedio</td>
		</tr>
	</thead>
	<tbody>
			
		
</table>
</div>
