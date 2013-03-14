
<html >
<head>
<title>Actualiza</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="js/valida.js"></script>
<link rel="STYLESHEET" type="text/css" href="css/botones.css">


</head>

<body>
<br/><br/><br/><br/>
<?php
//$nombre_pro	=$_GET['nombrep'];
$ids= $_GET['id'];
$nombres=$_GET['nombre'];
$passs  =$_GET['pass'];
$fechas =$_GET['fecha'];
$aliass =$_GET['alias'];

echo "<h1 align='center'>Descripcion de usuario</h1> <br/> <br/>";
echo "<h2 align=''>Nombre  :$nombres</h2>  <br/>";
echo "<h3 align=''>Contraseña    :$passs </h3>  <br/>";
echo "<h3 align=''>Fecha de ingreso   :$fechas </h3>  <br/>";
echo "<h3 align=''>Alias   :$aliass </h3>   ";


?>

<br/><br/>

<a href="#" onClick="return busca();" >Envia</a></br></br></br>
<a href="index.php">Retornar</a>

</body>
</html>