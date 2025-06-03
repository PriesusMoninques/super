<?php 
    $producto= $_POST['producto'];
   $precio= $_POST['precio'];
   $cantidad= $_POST['cantidad'];
   $total= $precio*$cantidad;


      echo "<p> $producto </p>";
     echo "<p> $precio </p>";
    echo "<p> $cantidad </p>";




      ?>

        <!DOCTYPE html>
        <html>
          <head>
 	      <title>Ticket de quintanar</title>  
      </head>
      <body>
 	    <h1>ticket - total a pagar:</h1>
       <p>Producto: <?php  echo $producto; ?></p>
      <p>precio: <?php  echo $precio; ?></p>
      <p>cantidad: <?php  echo $cantidad; ?></p>

      <p>Total: <?php  echo $total; ?></p>

      <a href="index.html">Regresar</a>


        </body>
      </html>