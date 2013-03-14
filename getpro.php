<?php
  session_start();
  $nombre = $_SESSION['nombre'];
//  $seccion=$_GET['seccion'];
    $idse = $_SESSION['id_user'];
  $tiempo= $_SESSION['session'];


include "conecta.php";

//consulta en la tabla

$con=conecta();

$pro=$_GET['pro'];
$can=$_GET['can'];
$user=$_GET['user'];
$empo=$_GET['tiem'];
$precio=$_GET['pre'];


 $sql="SELECT * FROM pedidos where tiempo='$tiempo' AND producto='$pro'  order by producto";
 $res=mysql_query($sql,$con);
 $num=mysql_num_rows($res);
 

if($num==0){
$sql ="INSERT INTO pedidos VALUES(0,'$user','$pro','$can','$empo','$precio',0)";
$res=mysql_query($sql,$con);
echo "Agregado a tu carrito";
	
}else{
 for($i=0;$i<$num;$i++){
               $cli = mysql_result($res,$i,"cantidad");
             }
    $suma=$cli+$can;
 
    $sql="UPDATE pedidos set cantidad=$suma where tiempo='$tiempo' AND producto='$pro' ";
    $res=mysql_query($sql,$con);
    echo "Sumado a tu carrito";

}





?>