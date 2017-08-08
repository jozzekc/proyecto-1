<?php

$V="O"; ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 8</title>

            <link href="style.css" rel="stylesheet">
            <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>

    <div class="php">

    <h4>La Letra: <?php echo  $V?></h4>

    <?php
echo "---------------------------------------";

if ($V =="a" or $V=="e" or $V=="i" or $V=="o" or $V=="u" or $V =="A" or $V=="E" or $V=="I" or $V=="O" or $V=="U"  ) { echo "<h4> Es Una Vocal</h4>"; }

else  { echo "<h4> No Es Vocal</h4>"; }

     ?>
     <a href="index.html">Atras</a>
</div>
  </body>
</html>
