<?php

include "conecta.php";

//consulta en la tabla

$con=conecta();

$tipo=$_REQUEST['tipo'];

$sql ="SELECT * from productos where categoria=$tipo";
$res=mysql_query($sql,$con);
$num=mysql_num_rows($res);

echo "$num";

?>