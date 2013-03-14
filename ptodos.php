
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
echo "<table border=1 width='75%' heigthCELLSPACING='10' >";
echo "<tbody>";
echo "  <td><th><h3>Producto</h2></th><th><h3>Precio</h2></th><th><h3>Existencia</h2></th> <th><h3>descripcion</h2></th><th><h3>imagen</h2></th> <th><h3>Status</h2></th><th><h3>Linea</h2></th><th colspan=3><h3>modificar</h2></th></td>    ";
for($i=0;$i<$num;$i++){
	$id = mysql_result($res,$i,"id_pro");
	$nombre = mysql_result($res,$i,"nombre_pro");
	$costo = mysql_result($res,$i,"costo_pro");
	$destacado = mysql_result($res,$i,"destacado");
	$info = mysql_result($res,$i,"info");
	$imagen = mysql_result($res,$i,"imagen");
	$status = mysql_result($res,$i,"status");
	$cate=mysql_result($res,$i,"categoria");


 if($cate<=1){$cate="blanca";}else  if($cate==2){$cate="electro";}else if($cate>=3){$cate="linea";}

	if($status==1){$status='Ok_line';}else{$status='OFF_line';}
	//echo "$id- $nombre <br/>";
//echo "<tr id=$id ><td>$nombre</td><td><a href='home.php?id=$id'>Ver</a></td><td><a href='actuali.php?id=$id&nombre=$nombre&pass=pass'>Editar</a></td><td><a href='eliminar.php?id=$id'>Borrar</a></td><tr>";   

echo "<tr align='center' ><td><td>$nombre</td><td>$costo</td><td>$destacado</td><td>$info</td><td> <img src='imagenes/$imagen' width=80 height=80> </td><td><input type='button' value=$status ></td> <td >$cate</td><td> <a href='peliminar.php?id=$id'>Borrar</a> </td> <td><a href='pactuali.php?id=$id&nombre=$nombre&costo=$costo&destacado=$destacado&info=$info&imagen=$imagen&catego=$cate' rel='lightbox_text'>Actualizar</a> </td></td></td> </tr>";
echo "</tbody>";
//para eliminar en lugar de href mandaar a ver mejor se lo mandamos a ajax('variable id-----**** onClick funcion(id)
//  
  }
   echo"</table>";
   echo "<a href='home.php'>MENU</a>"
   

   
   
?>


</body>
</html>
