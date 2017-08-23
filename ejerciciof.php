<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>faherenheit</title>
  </head>
  <body>
    <div class="container">
      <?php
include_once'ejercicio5.php';
echo con($_POST['G'],"faherenheit");
       ?>
    </div>

  </body>
</html>
