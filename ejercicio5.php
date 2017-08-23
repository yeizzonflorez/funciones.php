<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejercicio5</title>
  </head>
  <body>
    <div class="container">

      <form class=""action="ejerciciof.php" method="post">
        <label for="">ingresa la temperatura en grado celsius para pasar a grados faherenheit</label>
        <input type="text" name="G" value="">
        <input type="submit" name="faherenheit" value=" CONVERTIR">

      </form><br><br>
      <form class="" action="ejerciciok.php" method="post">
        <label for="">ingresa la temperatura en grado celsius para pasar a grados kelvin</label>
        <input type="text" name="G" value="">
        <input type="submit" name="kelvin" value=" CONVERTIR">
      </form>
      <?php
      function con($G,$T){
        $R=0;
        if ($T=="faherenheit") {
      $R=($G*1.8)+32;
        }
        elseif ($T=="kelvin") {
          $R=$G+273;
        
        }
        echo "La conversion es  :<br>";
        echo "__________________________________________<br>";
        return $R;
      }
       ?>

    </div>

  </body>
</html>
