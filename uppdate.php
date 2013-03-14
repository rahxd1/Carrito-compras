
<?php
include "conecta.php";
//actualizar registro
$con	=conecta();
$id=$_GET['aid'];
$nombre	=$_GET['anombre'];
$alias	=$_GET['alias'];
$pass	=$_GET['apass'];
//echo"$alias";
//$id		=$_GET['aacontra'];
//$fecha	=time();
$sql	="UPDATE cliente set nombre='$nombre', pass='$pass', user='$alias' WHERE id='$id'";
$res	=mysql_query($sql,$con);
//echo "$id  - $nombre";
 header("location:home.php?seccion=3");


?>

