<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>

        <link href="style.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>

    <div class="php">
<?php
$num="11";
echo "<h2>El Numero $num </h2>";
echo "----------------------";
?>

<?php



if ($num>10) { echo  "<h4>el numero es mayor a 10</h4>";  }
elseif ($num<10){  echo "<h4>el numero es menor a 10</h4>";  }
elseif ($num==10){  echo "<h4>el numero es igual a 10 </h4>";  }

?>

<a href="index.html">Atras</a>
    <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.min.js"></script>


      </div>
  </body>
</html>
