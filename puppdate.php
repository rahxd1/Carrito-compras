
<?php
include "conecta.php";
//actualizar registro
$con	=conecta();


$id=$_POST['id'];
$nom=$_POST['nombrep'];
$costo=$_POST['presio'];
$cate=$_POST['categoria'];
$info=$_POST['txt'];


$imagen_n=$_FILES['imag']['name'];
$imagen_f=$_FILES['imag']['tmp_name'];
$dir='imagenes/';

$imagen_ori=$dir.$imagen_n;
@copy($imagen_f,$imagen_ori);

$nombre_pro=$nom;
$costo_pro=$costo;

if($cate!=0)
{
$sql	="UPDATE productos set nombre_pro='$nom', costo_pro='$costo',info='$info',categoria='$cate' WHERE id_pro='$id'";
$res	=mysql_query($sql,$con);
//echo "$nom - $costo";
 header("location:home.php?seccion=7");
}

if($imagen_n){
$sql	="UPDATE productos set nombre_pro='$nom', costo_pro='$costo',imagen='$imagen_n',info='$info' WHERE id_pro='$id'";
$res	=mysql_query($sql,$con);
//echo "$nom - $costo";
 header("location:home.php?seccion=7");
 //echo"$imagen_n";
}
 else{
$sql	="UPDATE productos set nombre_pro='$nom', costo_pro='$costo',info='$info' WHERE id_pro='$id'";
$res	=mysql_query($sql,$con);
//echo "$nom - $costo";
 header("location:home.php?seccion=7");
//echo"$imagen_n";
   }
 
 

?>

