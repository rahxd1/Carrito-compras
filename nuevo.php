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
<form name="form1" id="form1"><br/>
Nombre     : <input type="text" name="nombre" id="nombre" min=3 max=45 required ><br/><br/>
Alias      : <input type="text" name="alias" id="alias" min=3 max=45 required><br/><br/>
Password : <input type="password" name="pass" id="pass"min=3 max=15 required><br/><br/>
Password : <input type="password" name="contra" id="contra" min=3 max=15 required> -repita-<br/><br/>
</form>


</br></br>
<a href="#" onClick="return reg();" >Envia</a></br></br></br>
<a href="index.php">Retornar</a>




<body>

</html>