<!DOCTYPE html>
<html>

<head>

  <title>Ejercicio 19</title>
  <link href="style.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body >

  <div class="php ">
    <button>Triangulo</button>
    <button>Rectangulo</button>
      <button>Trapecio</button>
      <br>




  <!--abrir mensaje emerjente:  data-toggle="modal" data-target="#myModal" -->
<hr>

        <?php
        echo"<h2>Triangulo</h2>";
        $l1=6;
        $l2=6;
        $l3=3;
         ?>
        <div class="php">
      ingrese lado 1:
      <?php echo $l1;?><br>
      ingrese lado 2:
      <?php echo $l2;?><br>
      ingrese lado 3:
      <?php echo $l3;?>

        <h4>
          <?php
          if ($l1==$l2 && $l1==$l3) {
            $p=$l1*3;
          echo "El perimetro del triangulo es ".$p;
        }elseif ($l1==$l2 ) {
          $p=($l1*2)+$l3;
        echo "El perimetro del triangulo es ".$p;
      }else {
        $p=($l1+$l2)+$l3;
      echo "El perimetro del triangulo es ".$p;

      }

           ?>

        </h4>

         <!--/modal-footer-->
        </div>
        <!--/modal-body-->
      </div>
      <!--/modal-content-->
    </form>
  </div>
  <!-- /.modal -->
  <!-- Modal -->

      <div class="php">

        <h2>Rectangulo</h2>
        <?php
        $a1=3;
        $b1=6;
        $a2=3;
        $b2=6;
         ?>
        <div class="php">
        ingrese altura 1:
        <?php echo $a1;?><br>
      ingrese  base 1:
        <?php echo $b1;?><br>
      ingrese altura 2:
      <?php echo $a2;?><br>
        ingrese  base 2:
      <?php echo $b2;?>

        <h4>
          <?php
          if ($a1==$a2 && $b2==$b1) {
            if ($a1<$b2) {
              $p=($a1*2)+($b1*2);
                echo "El perimetro del rectangulo es ".$p;
            }
      }else {
      echo "la base y altura ingresados son incorrectos";
      }
           ?>
        </h4>
         <!--/modal-footer-->
        </div>
        <!--/modal-body-->
      </div>
      <!--/modal-content-->
    </form>
  </div>
  <!-- /.modal -->
  <!-- Modal -->

      <div class="php">

        <h2>Trapecio</h2>
        <?php
        $a1=4;
        $b1=3;
        $a2=5;
        $b2=6;
         ?>
        <div class="php">
        ingrese altura 1: </label>
      <?php echo $a1;?><br>
        ingrese  base 1:
        <?php echo $b1;?> <br>
      ingrese altura 2:
        <?php echo $a2;?><br>
      ingrese  base 2: </label>
    <?php echo $b2;?>

        <h4>
          <?php
          if ( $b2>$b1) {
              $p=$a1+$a2+$b2+$b1;
                echo "El perimetro del Trapecio es ".$p;
      }elseif ($a1==$a2 && $b2==$b1) {
        echo "Las medidas no son correctas ";
      }
           ?>
        </h4>
         <!--/modal-footer-->
        </div>
        <!--/modal-body-->
      </div>
      <!--/modal-content-->
    </form>
  </div>
  <!-- /.modal -->

<a href="index.html">Atras</a>
</body>

</html>
