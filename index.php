<?php
  session_start();
  $nombre = $_SESSION['nombre'];
    $seccion=$_GET['seccion'];
   $idse = $_SESSION['id_user'];
  $tiempo= $_SESSION['session'];
   

?>



<!DOCTYPE html>
<html>

  <head lang="es"> 
    <meta charset='UTF-8'></meta>
    <title>Central TENA-y-TU</title>
    <script src="js/jquery.js"></script>
    <!--<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>-->
     <link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      
<script src="js/expstickybar.js">
</script>

<script src="js/valida.js"></script>
<link rel="STYLESHEET" type="text/css" href="css/botones.css">
<link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css' />
  

  
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
            <h1>Bienvenidos<h1>
          </hgroup>
          <p>
            
            Bienvenido a ParaLideres,
            Durante los últimos 11 años hemos servido como una herramienta de difusión y distribución de más de 25.000 materiales y recursos para el trabajo con Jóvenes y Adolescentes. Ahora queremos invitarte para que puedas hacer uso de las facilidades que ParaLideres tienes para tí.
            <br/><br/>Puedes hacer uso de todos nuestros artículos, recursos o capacitaciones y acceder a ellos por medio de la barra de busqueda o el menú lateral.
           Puedes Compartir con otros líderes, maestros o tutores los materiales que te parecieron útiles.<br/><br/>
          Puedes Contribuir en el entrenamiento y la capacitación de otros líderes con tus propios materiales, recursos o capacitaciones.<br/>
          Te invitamos a crear tu usuario para hacerte parte de nuestra comunidad y recibir noticias sobre la versión 4.0 pronto por venir y acceder a muchas herramientas para el trabajo en el ministerio juvenil.
          </p>
          <article><br/><br/>
            <hgroup>
              <h1 >Encuesta pasada</h1><h2>Te interesan las elecciones<h2></hgroup><br/><br/>
           <p>SI <meter min="0" max="100" value="40"></meter></p><br/>
           <p>NO<meter min="0" max="100" value="70"></meter></p><br/>
           <p>Me es indiferente <meter min="0" max="100" value="60"></meter></p>
        </article>
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

   
<!-- Pie de página -->

  </body>
</html>

