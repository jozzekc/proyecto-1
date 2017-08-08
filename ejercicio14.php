<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 14</title>
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>

      <div class="php">
        <?php
         $numero=3;
         $nume1=2;
         $nume2=1;

        ?>
        <h1>Orden descendente</h1>

         <?php echo $numero; ?>
         <?php echo $nume1; ?>
         <?php echo $nume2; ?>

        <h4>
          <?php
          if ($numero>$nume1 && $nume1>$nume2) {

            echo "Los Numeros  se Encuentran En Orden descendente";
            echo "<br>---------------------------------------";

            echo "<br>";
            echo $numero;
            echo "<br>";
            echo $nume1;
            echo "<br>";
            echo $nume2;

          }else{
            echo "Los Numeros no se Encuentran en Orden descendente ";
          }
          ?>
        </h4>
      
<a href="index.html">Atras</a>
      </div>

  </body>
</html>
