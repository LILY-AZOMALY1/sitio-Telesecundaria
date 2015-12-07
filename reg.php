<?php
$nombre=$_REQUEST['rename'];
$apellidos=$_REQUEST['rape'];
$nlista=$_REQUEST['no_list'];
$direccion=$_REQUEST['rdir'];
$grado=$_REQUEST['rgrado'];
$grupo=$_REQUEST['rgrupo'];
$nmaestro=$_REQUEST['rmaestro'];
$nombre_p=$_REQUEST['rnomp'];
$nombre_m=$_REQUEST['rnomm'];
$tel=$_REQUEST['rtelc'];
$tel2=$_REQUEST['rtelc2'];



$conexion=mysql_connect("localhost", "root") or die("Problemas al conectar el servidor");
mysql_select_db("telesecundaria", $conexion) or die("Error al tratar de conectar con la base de dato");

$checknombre=mysql_query("SELECT * FROM datos_alumno where nombre_alumno='".$nombre."'", $conexion); 

if($row=mysql_fetch_array($checknombre)){

echo '<script> alert ("Este usuario ya exite")</script>';

}
else 
{

	mysql_query("INSERT INTO datos_alumno VALUES ('$nlista','$nombre','$apellidos' ,'$grado', '$grupo', '$nmaestro', '$nombre_p', '$nombre_m','$direccion', '$tel','$tel2')", $conexion);

	echo '<script language="javascript">alert("usuario registrado con exito"); </script>';
	
}







?>