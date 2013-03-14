<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Edministrador</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="js/valida.js"></script>
<link rel="STYLESHEET" type="text/css" href="css/botones.css">
<link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css' />
</head>


<body>
<div id="boss2" align="center">
	<?php echo $_SESSION['mensaje'];?>

<form id="for00" name="for00">
<input type="text" name="vali00" id="vali00" placeholder="Manuel" required> <br/><br/>
<input type="password" name="vali01" id="vali01" placeholder="Contraseña" required>
</form>
<a href="#" onClick="return accion();"> ENVIAR </a>

</div>




</body>
</html>


<?php
$_SESSION['mensaje']='';
?>
