<?php

	session_start();
	$nombre = $_SESSION['nombre'];
    $seccion=$_GET['seccion'];



include "conecta.php";

//consulta en la tabla

$con=conecta();

//alta registros

$nombre_pro	=$_POST['nombrep'];
$costo_pro	=$_POST['presio'];
$info		=$_POST['txt'];




$imagen_n=$_FILES['imag']['name'];
$imagen_f=$_FILES['imag']['tmp_name'];
$dir='imagenes/';

$cate		=$_POST['categoria'];

$imagen_ori=$dir.$imagen_n;
@copy($imagen_f,$imagen_ori);

if($cate=='blanca'){$cate='1';}else if($cate=='electro'){$cate='2';}else if($cate=='linea'){$cate='3';}
$categoria=$cate;

$sql	="INSERT INTO productos VALUE(0,'$nombre_pro','$costo_pro',1,'$info','$imagen_n',1,'$categoria')";
//$sql	="INSERT INTO user VALUE(0,'$nombre','$user','pass','$fecha')";
$res	=mysql_query($sql,$con);
$id		=mysql_insert_id($con);//regresa el ultimo id que se creo
//echo "  $nombre  -$user     <br/>";
header("location:home.php?seccion=0");
//echo "<img src='imagenes/offline.JPG'>"

/*
header("location:home.php");
*/





?>
