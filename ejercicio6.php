<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejercicio6</title>
  </head>
  <body>
    <div class="container">
      <?php
      function pares($n1){
        if (($n1 % 2) == 0 ) {
          echo "El numero $n1 es : par";
        } else {
          echo "El numero $n1 es : impar";
        }
      }
        echo pares(8);
        ?>
    </div>
  </body>
</html>
