<?php
session_start();
include("conecta.php");
$con = conecta();
$nom = $_GET['admi1'];
$contra = $_GET['admi2'];


$sql = "SELECT * FROM user WHERE nombre='$nom' AND pass='$contra'";
$res = mysql_query($sql, $con);
$num = mysql_num_rows($res);

if ($num ==1){
	$id = mysql_result($res,0,"id");
	$nombre = mysql_result($res,0,"nombre");
	$_SESSION['id_user']=$id;
	$_SESSION['nombre']=$nombre;
	$pagina = 'home.php?seccion=0';
	}
	else{
		$_SESSION['mensaje']="Usuario no encontrado";
		$pagina = 'index.php?no_encontrad_ousuario';
		}
		
			

	
header("Location:$pagina");

?>