<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 10</title>

            <link href="style.css" rel="stylesheet">
            <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
<div class="php">
<h6>""ingrese un numero del 1 al 12 y que diga el mes correspondiente""</h6><br>

    <?php
    $num="12";

      echo "<h2>El Numero $num </h2>";
    echo "-----------------MES---------------------";

if ($num==1) { echo  "<h4>Enero</h4>";  }
elseif ($num==2){  echo "<h4>Febrero</h4>";  }
elseif ($num==3){  echo "<h4>Marzo</h4>";  }
elseif ($num==4){  echo "<h4>Abril</h4>";  }
elseif ($num==5){  echo "<h4>Mayo</h4>";  }
elseif ($num==6){  echo "<h4>Junio</h4>";  }
elseif ($num==7){  echo "<h4>Julio</h4>";  }
elseif ($num==8){  echo "<h4>Agosto</h4>";  }
elseif ($num==9){  echo "<h4>Septiembre</h4>";  }
elseif ($num==10){  echo "<h4>Octubre</h4>";  }
elseif ($num==11){  echo "<h4>Noviembre</h4>";  }
elseif ($num==12){  echo "<h4>Diciembre</h4>";  }

else {  echo "<h4>No Es Un Mes Del La Año</h4>";  }
?>
<a href="index.html">Atras</a>
</div>
  </body>
</html>
