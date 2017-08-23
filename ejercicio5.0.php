<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejercicio5</title>
  </head>
  <body>
    <div class="container">
      <form class="" method="post">
        <label for="">ingresa la temperatura en grado celsius</label>
        <input type="text" name="numero1" value="">
        <input type="submit" name="faherenheit" value=" grados faherenheit">
        <input type="submit" name="kelvin" value=" grados kelvin">
      </form>
      <?php
    function grados ($c,$grado){
  $resultado=0;
  if ($grado=="faherenheit") {
    $resultado=($c *1.8)+32;
  }
    return $resultado;

    }
    echo grados($c,"faherenheit");
       ?>
    </div>
  </body>
</html>
