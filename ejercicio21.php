<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 21</title>
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
      <div class="php">

        <?php   $n1=150000; ?>
        <h2>Valor neto</h2>

        <?php echo $n1; ?>
  <h4> -----------------------</h4>

        <h4>

        <?php

        $desc=0;
        if ($n1>250000) {
          echo "El Descuento Sera Del 10% ";
          $desc=$n1*(10/100);
          $neto=$n1-$desc;
        }else {
          echo "El Descuento sera Del 5% ";
          $desc=$n1*(5/100);
          $neto=$n1-$desc;
        }

         ?>
         <br>
         <label for="">Valor Neto A Pagar =</label>
         <?php echo $neto; ?>
       </h4>
  
<a href="index.html">Atras</a>
      </div>

  </body>
</html>
