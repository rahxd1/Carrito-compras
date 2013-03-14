<html >
<head>
<title>TODOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="js/valida.js"></script>
<link rel="STYLESHEET" type="text/css" href="css/botones.css">
</head>


<body>
<?php
include "conecta.php";

//consulta de registros
$con	=conecta();
$id    =$_GET['id']; 
$sql   ="SELECT * from user WHERE id=$id";
$res   =mysql_query($sql, $con);
$id    =mysql_result($res,0,"id");
$nombre=mysql_result($res,0,"nombre");
$pass	=mysql_result($res,0,"pass");
echo "<br/>Nombre: $nombre  <br/>Password: $pass<br/><br/>";
echo "<a href='home.php'>Regresar</a>";

?>





</body>
</html>

