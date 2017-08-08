<?php
$n1="2";
$n2="3";

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 11</title>


        <link href="style.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
<div class="php">

    <h4>Numero Uno:  <?php echo  $n1?></h4>
      <h4>Numero Dos:  <?php echo  $n2?></h4>

    <?php




if ($n1 =="2" or $n1=="3" or $n1=="5" or $n2 =="1" or $n2=="4" ) { echo "<h4> El Numero Uno Es Primo y El Segundo No Lo Es</h4>"; }

elseif ($n1 =="2" or $n1=="3" or $n1=="5" && $n2 =="2" or $n2=="3" or $n2=="5" ) { echo "<h4> Ambos Son Primos</h4>"; }

elseif ($n1=="1" or $n1=="4" or $n2 =="2" or $n2=="3" or $n2=="5" ) { echo "<h4> El numero Uno No es Primo y El Segundo Si Lo Es</h4>"; }


     ?>
     <a href="index.html">Atras</a>
</div>
  </body>
</html>
