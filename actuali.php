
<html >
<head>
<title>Actualiza</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="js/valida.js"></script>
<link rel="STYLESHEET" type="text/css" href="css/botones.css">
</head>

<body>

 
<?php
$id=$_GET['id'];
$nom=$_GET['nombre'];
$contra=$_GET['pass'];
$alias=$_GET['alias'];

echo "<h1 align='center'>Actualizar el  usuario</h1> <br/> <br/>";
echo "<form name='form3' id='form3'>";
echo "<input type='hidden' name='aid' id='aid'  value='$id'>";
echo "Nombre     : <input type='text' name='anombre' id='anombre' min=3 max=45 value='$nom' required ><br/>";
echo "Contrase&ntildea : <input type='password' name='apass' id='apass'min=3 max=15 value='$contra' required><br/>";
echo "Alias : <input type='text' name='alias' id='alias'min=3 max=15 value='$alias' required><br/>";
echo "</form>";

echo "<br/><br/>";

?>
<a href="#" onClick="return actu();" >Envia</a></br></br></br>
<a href="home.php">Retornar</a>

</body>
</html>