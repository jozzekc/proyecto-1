<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 17</title>

    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div class="php">
     <h2>Producto de A y B igual a C</h2>
     <?php
     echo "<br>---------------------------------------";

      $a=6;
      $b=3;
      $c=7;
      ?>


      <h4>
        <?php
        if ($a*$b==$c) {

          echo "El Producto  de ".$a." y ". $b." Es Igual A ".$c;
        }else {
          echo "El Producto  de ".$a." y ". $b." No es Igual A ".$c;
        }
         ?>
      </h4>
      
<a href="index.html">Atras</a>
    </div>

  </body>
</html>
