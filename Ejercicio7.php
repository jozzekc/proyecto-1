<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>

            <link href="style.css" rel="stylesheet">
            <link href="css/bootstrap.css" rel="stylesheet">


  </head>
  <body>
<div class="php">

    <?php
$numero="90";
  echo "<h4>El Numero $numero </h4>";
  echo "---------------------------------------";
if ($numero>=10 && $numero<=100) { echo "<h4>Se Encuentra Entre 10 y 100</h4>"; }

elseif ($numero<10 or  $numero>100 ) { echo "<h4>No Vale</h4>"; }

     ?>
     <a href="index.html">Atras</a>
</div>
  </body>
</html>
