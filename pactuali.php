<?php
include "conecta.php";
$con=conecta();

$sql="SELECT * FROM categoria";
$res=mysql_query($sql,$con);
$num=mysql_num_rows($res);


?>


<html >
<head>
<title>Actualiza</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="js/valida.js"></script>
<link rel="STYLESHEET" type="text/css" href="css/botones.css">
</head>

<body>

<h3 align="center">Actualizar datos</h3><br/>
<?php
$id=$_GET['id'];
$nom=$_GET['nombre'];
$costo=$_GET['costo'];
$destacado=$_GET['destacado'];
$cate=$_GET['catego'];
$info=$_GET['info'];
$imagen=$_GET['imagen'];

echo "<form name='form4' id='form4' >";

echo "<input type='hidden' name='id' id='id' value='$id'>";
echo "Producto     : <input type='text' name='nombrep' id='nombrep' min=3 max=45 value='$nom' required ><br/>";
echo "Presio      : <input type='number' name='presio' id='presio' min=1 value='$costo'><br/>";
echo "Imagen:<input type='text' value=$imagen/><br/>";
echo "Cambiar :<input type='file' name='imag' id='imag'  /> <br/>";

echo "Categoria: <select id='categoria' name='categoria' onChange='carga(this.value)' >";
       echo "<option value='0'>$cate</option>";
for($i=0;$i<$num;$i++){
		$id=mysql_result($res,$i,"id_cate");
		$nom=mysql_result($res,$i,"nombre");
		echo "<option value='$id'> $nom</option>";
		}


echo "</select>	<br/><br/>";

echo "Informacion:<br/>";
echo "<textarea id='txt' name='txt' rows='5' cols='20' wrap='hard'  maxlength='' > $info </textarea>";
echo "</form>";


echo "<br/><br/>";

?>

<a href="#" onClick="return salva();" >Envia</a>
<a href="home.php">Retornar</a>


</body>
</html>