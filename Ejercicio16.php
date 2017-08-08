<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejerciciop 16</title>

      <link href="style.css" rel="stylesheet">
      <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <br><br>
   <div class="php">
     <h1>Selecciona Opción Del Menú </h1>

       <li>Añadir</li>
       <li>Editar</li>
       <li>Eliminar</li>

     <?php $A=5; ?>
    <?php echo $A ?>
      <h4>
        <?php
        if ($A==1 or $A==2 or $A==3) {
          echo "La opción es correcta ";
        }else {
          echo "La opción es incorrecta";
        }
         ?>
      </h4>
      
<a href="index.html">Atras</a>
   </div>

  </body>
</html>
