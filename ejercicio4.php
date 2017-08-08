
<?php
$M="7";
$m1="6";
$m2="2";

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Ejercicio 4</title>
     <link href="style.css" rel="stylesheet">
     <link href="css/bootstrap.css" rel="stylesheet">
   </head>
   <body>
     <div class="php">


<h3>Impresion De Numeros De Menor A Mayor</h3>
<h2>Numero: <?php echo $M ?></h2>
<h2>Numero: <?php echo $m1 ?></h2>
<h2>Numero: <?php echo $m2 ?></h2>
<h4>--------------------------</h4>
<?php

if ($M< $m1 && $m1 < $m2) {echo "<h4>El Orden Es: $M $m1 $m2<h4>";}
elseif ($m1< $m2 && $m2 < $M) {echo "<h4>El Orden Es: $m1 $m2 $M<h4>";}
if ($m2< $M && $M < $m2) {echo "<h4>El Orden Es: $m2 $M $m1<h4>";}
if ($m2< $m1 && $m1 < $M) {echo "<h4>El Orden Es: $m2 $m1 $M<h4>";}
if ($M< $m2 && $m2 < $m1) {echo "<h4>El Orden Es: $M $m2 $m1<h4>";}
if ($m1< $M && $M < $m2) {echo "<h4>El Orden Esl orden es: $m1 $M $m2<h4>";}

 ?>
 <a href="index.html">Atras</a>
 </div>
   </body>
 </html>
