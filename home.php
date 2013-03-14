<?php
	session_start();
	$nombre = $_SESSION['nombre'];
    $seccion=$_GET['seccion'];


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Edministrador</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="STYLESHEET" type="text/css" href="css/botones.css">
<link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css' />
</head>

<body>

<table border=2 width='70%'>
	<tr>
<td>
<?php  
echo "<tr><td >Usuario:   $nombre </td>                                                    <td><a href='salir.php'>logaout</a></td><tr>";  
echo "<br/><br/> <br/>";
echo "<tr><td><a>Cliente:</a><br/><br/></td><td>Productos</td></tr>";
echo "<tr><td rowspan='2'><a href='home.php?seccion=3'>Todos los usuarios:</a><br/><br/></td>						<td><a href='home.php?seccion=6'>Nuevos productos</a></td></tr>";
echo "<tr>					<td><a href='home.php?seccion=7'> Todos los productos</a></td></tr>";

switch($seccion){
	case 1: $pagina="busca.php";   break;
	case 2: $pagina="nuevo.php";    break;
	case 3: $pagina="todos.php";    break;
	case 4: $pagina="elimina.php";    break;

    case 5: $pagina="pbusca.php";   break;
	case 6: $pagina="pnuevo.php";    break;
	case 7: $pagina="ptodos.php";    break;
	case 8: $pagina="pelimina.php";    break;


	default: $pagina="nada.php"; break;

}

echo "<td colspan=2>";
include($pagina);
echo "</td>";
if($costubre){echo "$toma eso";} 

?>
</td>
</tr>
</table>



<!--

<div align="center"><a href="salir.php">LOGOUT</a></div>
<div class="navbox">
<ul class="nav">
<li><a href="busca.php">Buscar</a></li>
<li><a href="nuevo.php">Nuevo usuario</a></li>
<li><a href="todos.php">Actualizar </a></li>
<li><a href="eliminar.php">Eliminar</a></li>

</ul>
</div>
-->

</body>
</html>