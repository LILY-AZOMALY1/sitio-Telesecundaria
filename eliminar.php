<?php 
$eli=$_REQUEST['cal'];


$conexion=mysql_connect("localhost", "root") or die("Problemas al conectar el servidor");
mysql_select_db("telesecundaria", $conexion) or die("Error al tratar de conectar con la base de dato");


$eli=mysql_query( "DELETE FROM datos_alumno where no_lista='".$eli."' " ,$conexion);

echo "El usuario ha sido eliminado";


 ?>