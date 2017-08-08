<?php

$C="a d s i"; ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>

            <link href="style.css" rel="stylesheet">
            <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
    <div class="php">

    <h4>El Caracter Ingresado : <?php echo  $C?></h4>
<h4>--------------------------------</h4>
    <?php


if ($C =="A D S I" or $C=="a d s i"   ) { echo "<h4> Es Un Caracter Correcto </h4>"; }

else  { echo "<h4> Es Un Caracter Incorrecto</h4>"; }

     ?>
     <a href="index.html">Atras</a>
</div>
  </body>
</html>
