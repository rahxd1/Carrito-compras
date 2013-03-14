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
$val    =$_GET['bnombre']; 
$sql   ="SELECT * from user WHERE nombre='$val'";
$res   =mysql_query($sql, $con);
$id    =mysql_result($res,0,"id");
$nombre=mysql_result($res,0,"nombre");
$pass	=mysql_result($res,0,"pass");
echo "<br/>Nombre: $nombre  <br/>Password: $pass<br/><br/>";
echo "<a href='todos.php'>Regresar</a>";

?>





</body>
</html>

