<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejericicio4</title>
  </head>
  <body>
    <div class="container">
      <?php
function operaciones($n1,$n2,$operacion){
  $resultado=0;
  if ($operacion=="sumar") {
    $resultado = $n1 + $n2;
      echo operaciones(18,25,"raiz2");
  }elseif ($operacion == "restar") {
    $resultado = $n1 - $n2;
  }elseif ($operacion == "multiplicar") {
  $resultado= $n1 * $n2;
}elseif ($operacion == "potencia") {
    $resultado= pow($n1);
    elseif ($operacion == "potencia1") {
        $resultado= pow($n2);
  }elseif ($operacion == "raiz1") {
      $resultado= sqrt($n1);
}elseif ($operacion == "raiz2") {
$resultado=sqrt($n2);
      }
      echo "los numeros son $n1 y $n2  <br> ";

return $resultado;

}
  echo operaciones(18,25,"potencia1");

       ?>
    </div>
  </body>
</html>
