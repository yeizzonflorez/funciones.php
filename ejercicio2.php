<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejercicio2</title>
  </head>
  <body>
    <div class="container">
      <?php
function areas($l1,$area){
  $resultado=0;
  if ($area=="cuadrado") {
    $resultado = $l1*$l1 ;
    echo "el cuadrado del numero $l1  es :<br>";
  }
return $resultado;
}

echo areas(6,"cuadrado");


       ?>

    </div>
