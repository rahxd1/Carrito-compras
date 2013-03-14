<?php
include "conecta.php";

//consulta en la tabla

$con=conecta();

$tipo=$_GET['tipo'];

$sql ="SELECT * from productos where id_pro=$tipo";
$res=mysql_query($sql,$con);
$imag=mysql_result($res,0,'imagen');
$nom=mysql_result($res,0,'nombre_pro');
$cost=mysql_result($res,0,'costo_pro');

echo"$imag@@$nom@@$cost";

?>