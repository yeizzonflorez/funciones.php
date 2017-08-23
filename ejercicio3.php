<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejericicio3</title>
  </head>
  <body>
    <div class="container">
      <?php
function promedios($p1,$p2,$p3,$promedio){
  $resultado=0;
  if ($promedio =="p") {
    $resultado=($p1 + $p2 +$p3)/3;
  }
  echo "el precio del jabon liquido en el  ara es:$p1<br>";
  echo "el precio del jabon liquido  en el  exito es: $p2<br>";
  echo "el precio del jabon liquido en  la olimpica es $p3<br>";
  echo "________________________________________________________________<br>";
echo "    el promedio es:";
return $resultado;
}

echo promedios(4200,5000,4500,"p");
       ?>

    </div>

      </body>
    </html>
