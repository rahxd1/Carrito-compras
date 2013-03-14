
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

$sql="SELECT * FROM cliente";
$res=mysql_query($sql,$con);
$num=mysql_num_rows($res);
echo "<table  width='90%' height='400'>";
for($i=0;$i<$num;$i++){
	$id = mysql_result($res,$i,"id");
	$nombre = mysql_result($res,$i,"nombre");
	$pass = mysql_result($res,$i,"pass");
	$fecha = mysql_result($res,$i,"fecha");
	$alias = mysql_result($res,$i,"user");
	//echo "$id- $nombre <br/>";
echo "<tr id=$id ><td>$nombre </td><td><a href='busca.php?id=$id&nombre=$nombre&pass=$pass&fecha=$fecha&alias=$alias' rel='lightbox_text'>Ver</a></td><td><a href='actuali.php?id=$id&nombre=$nombre&pass=pass&alias=$alias' rel='lightbox_text'>Editar</a></td><td><a href='eliminar.php?id=$id'>Borrar</a><td></td></td><tr>";   
//para eliminar en lugar de href mandaar a ver mejor se lo mandamos a ajax('variable id-----**** onClick funcion(id)
//  
  }
   echo"</table>";
   echo "<a href='home.php?seccion=0'>MENU</a>"
   

   
//<a href="todos.php" rel="lightbox_text">manda</a> lightbox   
?>



</body>
</html>
