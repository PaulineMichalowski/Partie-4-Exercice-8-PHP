<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 8</title>
  </head>
  <body>
    <?php
    $first_number = 12;
    $second_number = 42;
    $third_number = 20;
    function calcul($number1, $number2, $number3) {
      return ($number1 + $number2 + $number3);
    }
    echo calcul($first_number, $second_number, $third_number);
    ?>
  </body>
</html>
