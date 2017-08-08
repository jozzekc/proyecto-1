<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 22</title>

      <link href="style.css" rel="stylesheet">
      <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
      <div class=php>
        <?php   $s=34000000; $años=10?>
        <h1>Sueldo De Empleado SENA</h1>
      <h3>Sueldo De Empleado</h3>
      <?php echo" $ ". $s; ?> Al Año"
        <h3>Ingrese La Cantidad de Años En El SENA </h3>
        <br>
      <?php echo $años?>

        <br>
        <h4>
          <?php
          $aum=0;
          $pago=0;
          if ($años==5) {
            echo "Tendra un Aumento de 5%";
            $aum=(5/100)*$s;
            $pago=$aum+$s;
          }elseif ($años>5 && $años<=10) {
            echo "Tendra un Aumento de 10%";
            $aum=(10/100)*$s;
            $pago=$aum+$s;
          }elseif ($años<5 && $años>3) {
            echo "Tendra un Aumento de 2,5%";
            $aumento=(2.5/100)*$s;
            $pago=$aume+$s;
          }elseif ($años>10) {
            echo "Tendra un Aumento de 15%";
            $aum=(15/100)*$s;
            $pago=$aum+$s;
          }else {
            echo "Tendra un Aumento de 0%";

            $pago=$aum+$s;
          }
           ?>
       </h4>
       <h3>Al Empleado Se Le Pagara:</h3>
<?php echo $pago?>

<a href="index.html">Atras</a>
      </div>

  </body>
</html>
