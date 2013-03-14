<?php
//conexion con la base de datos

define("HOST","localhost");
define("BD","catalogo");
define("USER","root");
define("PASS","");

function conecta(){
   if(!($con =mysql_connect(HOST,USER,PASS))){
       echo "error no se conecta BD";
        exit();
        }  
  if(!mysql_select_db(BD,$con)){
   echo"error selecionado BD";  
         exit();
        }
		return $con;

}

?>