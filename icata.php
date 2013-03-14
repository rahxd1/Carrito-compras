<?php
  session_start();
  $nomx = $_SESSION['nombre'];
 // $seccion=$_GET['seccion'];
   $idse = $_SESSION['id_user'];
  $tie= $_SESSION['session'];

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

  
  </head>
  <body>
   <div id="contenido">

    <header>
        <hgroup>
       
        </hgroup>

     <div id="logo">  
<?php

     if ($nomx) 
      {
        
        echo "<p>Bienvenido:<br/> $nomx </p>  ";
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
    if($nomx){
            echo "<div id='menuprin'><ul><li><a href='index.php'>Home</a></li><li><a href='icata.php'>Catalogo </a></li><li><a href='carrito.php'>Carrito</a></li><li><a href='histo.php'>Historia</a></li></ul></div>";

    }else{
          echo "<div id='menuprin'><ul><li><a href='index.php'>Home</a></li><li><a href='icata.php'>Catalogo </a></li><li><a href='icreg.php'>Registro </a></li></ul></div>";
    }
    ?>

   </header>



    
      <section>
        <div id="txtPr">
       <article>
          <hgroup>
            <h1>Catalago<h1>
          </hgroup>
          <p>
            <?php 

            include "previw.php";

            ?>
            </p>
         
        </article>
        <?php
        if($nomx){
           echo "<input type='hidden' id='mede' name='mede' value=$nomx> ";
        }

          ?>
        <article id="carro">
          
          <?php

         if($nomx){
           echo "<hgroup> <h2>Comprar</h2></hgroup>";
           echo "<p>  <img src='imagenes/carr.png' width='100' height='100' ></br><input type='number' min='1' max='50' placeholder='numero' id='num' value='0'></p>";
          
           echo "</br></br><a href='#' onClick='return carrito();'>Agregar al carrito</a>";
          }else{
            echo "<hgroup> <h2>Comprar</h2></hgroup></br>";
            echo "¿Quieres comprar?</br></br> Necesitas </br></br> iniciar session";        
              }

          ?>
        </article>
 
</div>
        
      </section>



   <!--<aside>
     <hgroup> <h2>Compra</h2></hgroup>
     <p>

        <img src="imagenes/carr.jpg ">

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

