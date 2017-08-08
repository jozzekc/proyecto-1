<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 13</title>
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>

      <div class="php">
        <?php
         $numero=23;
         $numero1=36;
         $numero2=58;

        ?>
        <h1>Orden ascendente</h1>

         <?php echo $numero; ?>
         <?php echo $numero1; ?>
         <?php echo $numero2; ?>

        <h4>
          <?php
          if ($numero<$numero1 && $numero1<$numero2) {

            echo "Los Numeros  se Encuentran En Orden Ascendente";
            echo "<br>---------------------------------------";

            echo "<br>";
            echo $numero;
            echo "<br>";
            echo $numero1;
            echo "<br>";
            echo $numero2;

          }else{
            echo "Los Numeros no se Encuentran en Orden Ascendente ";
          }
          ?>
        </h4>
    
<a href="index.html">Atras</a>
      </div>

  </body>
</html>
