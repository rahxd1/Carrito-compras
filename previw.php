
<?php
  session_start();
  $nomx = $_SESSION['nombre'];
 // $seccion=$_GET['seccion'];
   $idse = $_SESSION['id_user'];
  $tie= $_SESSION['session'];

?>

<html >
<head>
<title>TODOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="js/valida.js"></script>
<link rel="STYLESHEET" type="text/css" href="css/botones.css">




<link rel="shortcut icon" type="image/ico" href="/images/favicon.gif" />	
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>





</head>

<body>
<?php

include "conecta.php";

//consulta en toda la  tabla

$con=conecta();
$sql="SELECT * FROM productos";
$res=mysql_query($sql,$con);
$num=mysql_num_rows($res);


for($i=0;$i<$num;$i++){
	$id = mysql_result($res,$i,"id_pro");
	$nombre = mysql_result($res,$i,"nombre_pro");
	$costo = mysql_result($res,$i,"costo_pro");
	$destacado = mysql_result($res,$i,"destacado");
	$info = mysql_result($res,$i,"info");
	$imagen = mysql_result($res,$i,"imagen");
	$status = mysql_result($res,$i,"status");
	$cate=mysql_result($res,$i,"categoria");



//echo "<tr id=$id ><td>$nombre</td><td><a href='home.php?id=$id'>Ver</a></td><td><a href='actuali.php?id=$id&nombre=$nombre&pass=pass'>Editar</a></td><td><a href='eliminar.php?id=$id'>Borrar</a></td><tr>";   

if($tie){
echo " <img src='imagenes/$imagen' width=50 height=50 onMouseover='pre($id,$tie)'>";
}else{
	echo " <img src='imagenes/$imagen' width=50 height=50 onMouseover='visual($id)'>";
}


//para eliminar en lugar de href mandaar a ver mejor se lo mandamos a ajax('variable id-----**** onClick funcion(id)
//  
  }
   echo "<br/><br/>";
   echo "<div id='contenedor'></div>";
   echo "<div id='contenedor2'></div>";
   
   
   

   
   
?>


</body>
</html>
