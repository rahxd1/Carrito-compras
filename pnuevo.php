<?php



include "conecta.php";
$con=conecta();

$sql="SELECT * FROM categoria";
$res=mysql_query($sql,$con);
$num=mysql_num_rows($res);


?>


<html>
<header> 
<script src="js/valida.js"></script>
<title> Usuario</title>
<style>
body{
	position: relative;
	height: 100%;
	background: -webkit-gradient(linear, left top, left bottom, from(#ccc), to(#fff));

}
</style>
</header>

<body>
<form name="formp" id="formp" align="center">
	<br/><br/><br/>
Producto     : <input type="text" name="nombrep" id="nombrep" min=3 max=45 placeholder="Television" required ><br/><br/>
Presio      : <input type="number" name="presio" id="presio" min=1 placeholder="250"><br/><br/>
Imagen :  <input type="file" name="imag" id="imag"  /><br/><br/>
Categoria: 
<select id="categoria" name="categoria" onChange="carga(this.value)">
<?php
for($i=0;$i<$num;$i++){
		$id=mysql_result($res,$i,"id_cate");
		$nom=mysql_result($res,$i,"nombre");
		echo "<option value='$id'> $nom</option>";
		}


?>
</select><br/><br/><br/>

Informacion:<br/>
<textarea id="txt" name="txt" rows="5" cols="20" wrap="hard"  maxlength="" placeholder="descripcion del producto">
 Descripcion
</textarea>
</form>

<a href="#" onClick="return pro();" >Envia</a></br></br></br>
<a href="home.php">Retornar</a>


<body>

</html>