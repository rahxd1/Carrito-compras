<?php
session_start();
include("conecta.php");
$con = conecta();
$nom = $_GET['vali00'];
$contra = $_GET['vali01'];

$sql = "SELECT * FROM cliente WHERE nombre='$nom' AND pass='$contra'";
$res = mysql_query($sql, $con);
$num = mysql_num_rows($res);

if ($num ==1){
	$id = mysql_result($res,0,"id");
	$nombre = mysql_result($res,0,"nombre");
	$_SESSION['id_user']=$id;
	$_SESSION['nombre']=$nombre;
    $_SESSION['session']=time();
	$pagina = 'index.php?seccion=0';
	}
	else{
		$_SESSION['mensaje']="Usuario no encontrado";
		$pagina = 'index.php?no_encontrad_ousuario';
		}
			

	
header("Location:$pagina");

?>