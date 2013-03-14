<?php
  session_start();
  $nombre = $_SESSION['nombre'];
//  $seccion=$_GET['seccion'];
    $idse = $_SESSION['id_user'];
  $tiempo= $_SESSION['session'];

?>

<!DOCTYPE html>
<html>

  <head lang="es"> 
    <meta charset='UTF-8'></meta>
    <title>Central TENA-y-TU</title>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

    <script src="js.js"></script>
<script src="js/valida.js"></script>
<link rel="STYLESHEET" type="text/css" href="css/botones.css">
<link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" type="image/ico" href="/images/favicon.gif" />  
  <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
  <script src="js/prototype.js" type="text/javascript"></script>
  <script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
  <script src="js/lightbox.js" type="text/javascript"></script>

  
  </head>
  <body>
   <div id="contenido">

    <header>
        <hgroup>
       
        </hgroup>

     <div id="logo">  

    <?php

     if ($nombre) 
      {
        
        echo "<p>Bienvenido:<br/> $nombre </p>  ";
        echo "<p><a href='#' onclick='return salir();'>salir</a></p>";
      }else{
      echo "Login:   ";
     echo "<form id='for00' name='for00'>";
     echo "<input type='text' name='vali00' id='vali00' placeholder='Manuel' required> <br/><br/>";
     echo "<input type='password' name='vali01' id='vali01' placeholder='Contraseña' required>";
     echo "</form>";

     echo "<a href='#'' onClick='return accion();'> ENVIAR </a>";
            }

     ?>
</div>

     <div id="banner"><a href="index.php"><img src="imagenes/memes.jpg" width="700" height="150"></a></div>
   
     <?php
    if($nombre){
            echo "<div id='menuprin'><ul><li><a href='index.php'>Home</a></li><li><a href='icata.php'>Catalogo </a></li><li><a href='carrito.php'>Carrito</a></li><li><a href='histo.php'>Comprar</a></li></ul></div>";

    }else{
          echo "<div id='menuprin'><ul><li><a href='index.php'>Home</a></li><li><a href='icata.php'>Catalogo </a></li><li><a href='icreg.php'>Registro </a></li></ul></div>";
    }
    ?>

   </header>



    
      <section>
        <div id="txtPr">
       <article>
          <hgroup>
            <h1>--** Carrito de compras **--<h1>
          </hgroup>
          <p>
            <?php

              include "conecta.php";

//consulta en toda la  tabla
             $con=conecta();

             $sql="SELECT * FROM pedidos where cliente='$nombre' order by pagado";
             $res=mysql_query($sql,$con);
            
             echo "<table  width='70%' height='50%' border='0' >";
             echo "<tr ><th> Producto</th><th> Cantidad</th><th>Pagado</th><th> Fecha</th><br/><br/>";
             $num=mysql_num_rows($res);

             for($i=0;$i<$num;$i++){
               $id = mysql_result($res,$i,"id");
               $cli = mysql_result($res,$i,"cliente");
               $pro = mysql_result($res,$i,"producto");
               $can = mysql_result($res,$i,"cantidad");
               $tiem = mysql_result($res,$i,"tiempo");
                $paga = mysql_result($res,$i,"pagado");

                if($paga==1){ $pagado="pagado";}else{$pagado="pendiente";}
             
           $valor=date('d - F- Y ',strftime($tiem));
            //$valor=date('d - F- Y -h:i:s A',strftime($tiem));
           echo "<tr><td>$pro</td><td>  $can</td><td>$pagado</td><td> $valor</td><tr>";
             //para eliminar en lugar de href mandaar a ver mejor se lo mandamos a ajax('variable id-----**** onClick funcion(id)
             //  
               }
                echo"</table></br></br></br></br></br></br>";
                echo "<a href='index.php'>MENU</a>"
   
//<a href="todos.php" rel="lightbox_text">manda</a> lightbox   


            ?>
            <div id='imagenFlotante'>
              <a href='#' onClick="return paga();" >
              <img src='imagenes/pagar.jpg'>
              </a>
            </div>
           
           </p>
         
        </article>
        
 
</div>
        
      </section>



   <!--  <aside>
     <hgroup> <h2>Top links</h2></hgroup>
     <p>

      Sencillo:   <input type="radio" name="sens" id="sens">
      Redondo:<input type="radio" name="redo" id="redo"><br/><br/><br/>
          Compañia:<select>
          <option value="0">Compañia</option>
          <option value="1">ETN</option>
          <option value>="2">ODM</option>
        </select>
        <br/><br/>
         Origen <select id="seleccion"  name="seleccion" onChange="#">
            <option value="0">Origen</option>
            <option value="1">Guadalajara</option>
            <option value="2">tamahulipas</option>
          </select>
        <br/><br/>
        Destino<select id="desti" name="desti" onchange="#">
        <option value="0">Destino</option>
        <option value="1">Acapulco</option>
        <option value="2">C.D.Juarez</option>
        <select>
          <br/><br/>
          Adulto: <input type="number" id="" name="" min="0" max="32" value="0" step="3">
          Menor:<input type="number" id="" name="" min="0" max="32" value="0" step="52"><br/>
          Estudiante:<input type="number" id="" name="" min="0" max="32" value="0"><br/>
          Profesor:<input type="number" id="" name="" min="0" max="32" value="0"><br/>
          Senectud:<input type="number" id="" name=""min="0" max="32" value="0"><br/><br/><br/>
          <input type="submit" name="enviar">
      </p>
      
    </aside>



    <footer>
     <canvas id="miCan"></canvas>
      <nav>
       <ul>
          <li><a href="#">Horarios y destinos</a></li>
          <li><a href="#">Promociones</a></li>
          <li><a href="#">Empresas</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="#">Quines somos</a></li>
          <li><a href="#">Bolsa de trabajo</a></li>

        </ul>
      </nav>
    </footer>-->



</div>
  </body>
</html>

