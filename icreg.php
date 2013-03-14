

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

     if ($nombre) 
      {
        
        echo "<p>Bienvenido:<br/> $nombre  </p>  ";
        echo "<p><a href='salir.php'>salir</a></p>";
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
            echo "<div id='menuprin'><ul><li><a href='index.php'>Home</a></li><li><a href='icata.php'>Catalogo </a></li><li><a href='carrito.php'>Carrito</a></li></ul></div>";

    }else{
          echo "<div id='menuprin'><ul><li><a href='index.php'>Home</a></li><li><a href='icata.php'>Catalogo </a></li><li><a href='icreg.php'>Registro </a></li></ul></div>";
    }
    ?>

   </header>



    
      <section>
        <div id="txtPr">
       <article>
          <hgroup>
            <h1>Registro<h1>
          </hgroup>
          <p>
            <?php

            include "nuevo.php";

            ?>
           
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

