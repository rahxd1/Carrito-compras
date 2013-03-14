<?php
include "conecta.php";

//eliminacion de registros
$con	=conecta();
$id		=$_GET['id'];
$sql	="DELETE FROM productos WHERE id_pro=$id";
$res	=mysql_query($sql,$con);
 header("location:home.php?seccion=7");


?>


