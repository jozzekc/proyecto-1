<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 9</title>

            <link href="style.css" rel="stylesheet">
            <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
<div class="php">


    <?php
    $num="8";

      echo "<h2>El Numero $num </h2>";
    echo "---------------------------------------";

if ($num==1) { echo  "<h4>lunes </h4>";  }
elseif ($num==2){  echo "<h4>Martes</h4>";  }
elseif ($num==3){  echo "<h4>Miercoles</h4>";  }
elseif ($num==4){  echo "<h4>Jueves</h4>";  }
elseif ($num==5){  echo "<h4>Viernes</h4>";  }
elseif ($num==6){  echo "<h4>Sabado</h4>";  }
elseif ($num==7){  echo "<h4>Domingo</h4>";  }
else {  echo "<h4>No Es Un Dia De La Semana</h4>";  }
?>
<a href="index.html">Atras</a>

</div>
  </body>
</html>
