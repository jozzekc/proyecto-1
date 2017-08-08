<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 18</title>
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
    <div class="php">
     <h1>Modulo de A y B igual a C</h1>
     <?php
     echo "------------------------";
      $a=10;
      $b=6;
      $c=7;
      ?>

      <h4>
        <?php

        if ($a/$b==$c) {
          echo "El Modulo De ".$a." y ". $b." Es Igual A ".$c;
        }else {
          echo "El Modulo De ".$a." y ". $b." No Es Igual A ".$c;
        }
         ?>
      </h4>
      
<a href="index.html">Atras</a>
    </div>

  </body>
</html>
