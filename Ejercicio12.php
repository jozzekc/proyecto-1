<?php
$n1="1";
$n2="11";

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 12</title>
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>

    <div class="php">

    <h4>Numero Uno:  <?php echo  $n1?></h4>
      <h4>Numero Dos:  <?php echo  $n2?></h4>

    <?php




if (($n1 =="2" or $n1=="4" or $n1=="6" or $n1=="8" or $n1=="10") && $n2=="1" or $n2=="3" or $n2=="5" or $n2=="7" or $n2=="9" ) { echo "<h4> n1 Es Par y n2 Es Impar</h4>"; }

if (($n2=="2" or $n2=="4" or $n2=="6" or $n2=="8" or $n2=="10") && $n1 =="1" or $n1=="3" or $n1=="5" or $n1=="7" or $n1=="9" ) { echo "<h4> n1 Es Impar y n2 Es Par </h4>"; }

if (($n2=="2" or $n2=="4" or $n2=="6" or $n2=="8" or $n2=="10") && $n1 =="2" or $n1=="4" or $n1=="6" or $n1=="8" or $n1=="10" ) { echo "<h4> Ambos Son Par</h4>"; }

else { echo "<h4> Ninguno De Los Dos Es Primo</h4>"; }
     ?>

 <a href="index.html">Atras</a>
</div>
  </body>
</html>
