<?php

include "conecta.php";

//consulta en la tabla

$con=conecta();

//alta registros
$nombre	=$_GET['nombre'];
$user	=$_GET['alias'];
$contra	=$_GET['pass'];
$fecha	=time();
//$sql	="INSERT INTO user VALUE(0,'$nombre','$contra')";
$sql	="INSERT INTO cliente VALUE(0,'$nombre','$user','$contra','$fecha')";
$res	=mysql_query($sql,$con);
$id		=mysql_insert_id($con);//regresa el ultimo id que se creo
//echo "  $nombre  -$user   -$contra     <br/>";
//header("location:index.php");
//echo "<img src='imagenes/offline.JPG'>"


header("location:index.php");






?>