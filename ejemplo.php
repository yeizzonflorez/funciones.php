<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejericicio1</title>
  </head>
  <body>
    <div class="container">
      <?php
function operaciones($n1,$n2,$operacion){
  $resultado=0;
  if ($operacion=="sumar") {
    $resultado = $n1 + $n2;
  }elseif ($operacion == "restar") {
    $resultado = $n1 - $n2;
  }elseif ($operacion == "multiplicar") {
  $resultado= $n1 * $n2;
  }
return $resultado;
}

       ?>

    </div>





  </body>
</html>
