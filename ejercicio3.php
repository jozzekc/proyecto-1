<?php

$P="3"; ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>

            <link href="style.css" rel="stylesheet">
            <link href="css/bootstrap.css" rel="stylesheet">


  </head>
  <body>
    <div class="php">
    <h4>El Numero: <?php echo  $P?></h4>

    <?php
echo "---------------------------------------";

if ($P =="" or $P=="2" or $P=="3" or $P=="" or $P=="5"  ) { echo "<h4> Es Primo</h4>"; }

else  { echo "<h4> No Es Un Numero Primo</h4>"; }

     ?>
     <a href="index.html">Atras</a>
</div>
  </body>
</html>
