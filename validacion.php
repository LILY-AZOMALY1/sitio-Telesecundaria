<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>


<?php


$usuario=$_REQUEST['us_nombre'];
$pw=$_REQUEST['contraseña'];

$conexion=mysql_connect("localhost", "root") or die("Problemas al conectar el servidor");
mysql_select_db("telesecundaria", $conexion) or die("Error al tratar de conectar con la base de dato");

$estandar=mysql_query("SELECT * FROM usuarios where  padcont ='".$pw."'",$conexion); 

$adm=mysql_query("SELECT * FROM usuarios where  admincont ='".$pw."'",$conexion); 



if($row=mysql_fetch_array($estandar)){
echo "Se ha registrado correctamente pulse seguir para ver los datos del alumno";
?>

<form method="POST" action="inpadre.php">
<a href="inpadre.php"><button type="submit"  name= "cal" value=<?php echo  $row['us_nombre'];?>>Seguir</button></a>
</form>


<?php
}
else if($row=mysql_fetch_array($adm))
{
header("Location:panel.php");


}
else
{
	echo '<script> alert ("El usuario o contraseña no son correctos")</script>';
   
}



?>


</body>
</html>