<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 20</title>

          <link href="style.css" rel="stylesheet">
          <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
      <div class="php">
       <h1>Convercion de Km a Unidades</h1>
       <hr>
       <?php $km=20; ?>

       <?php echo $km;?>

       <h2> hectómetros </h2>
       <h4>
         <?php
         $hm=($km*10)/1;
         echo "En ".$km." kilómetros hay ".$hm." hectómetros";
          ?>
       </h4>

          <h2> decámetros  </h2>
          <h4>
            <?php
            $dm=($km*100)/1;
            echo "En ".$km." kilómetros hay ".$dm." decámetros";
             ?>
          </h4>

          <h2> Metros</h2>
          <h4>
            <?php
            $m=$km*1000;
            echo "En ".$km." kilómetros hay ".$m."metros";
             ?>
           </h4>

          <h2>Decímetros </h2>
          <h4>
            <?php
            $dm=($km*10000)/1;
            echo "En ".$km." kilómetros hay ".$dm." Decímetros";
            ?>
          </h4>


             <h2> Centímetros</h2>
             <h4>
               <?php
               $cm=$km*100000;
               echo "En ".$km." kilómetros hay ".$cm." Centímetros";
                ?>
             </h4>

           <h2> Centímetros</h2>
           <h4>
             <?php
             $mm=$km*1000000;
             echo "En ".$km." kilómetros hay ".$mm." Milímetros";
              ?>
           </h4>
          
<a href="index.html">Atras</a>
      </div>

  </body>
</html>
