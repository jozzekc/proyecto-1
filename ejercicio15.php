<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 15</title>
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
    <div class="php">
     <h1>Suma del A y B igual a C</h1>
     <?php
     echo "<br>---------------------------------------";
      $a=10;
      $b=9;
      $c=20;
      ?>

      <h4>
        <?php


        if ($a+$b==$c) {


          echo "La Suma De ".$a." y ". $b." Es Igual A ".$c;
        }else {
          echo "La Suma De ".$a." y ". $b." No Es Igual A ".$c;
        }
         ?>
      </h4>

<a href="index.html">Atras</a>
    </div>

  </body>
</html>
