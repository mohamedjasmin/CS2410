<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
    <?php
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
     ?>

     Your first number is <?= htmlspecialchars($number1)?>.<br>
     Your second number is <?=htmlspecialchars($number2)?>.<br>
     Addition result: <?=$number1+$number2?>.<br>
     <!--Division result:.<br> -->
     Multiplication result:<?=$number1*$number2?>.<br>
     Substraction result: <?=$number1-$number2?>.<br>
     Division result:

     <?php
     if($number2 == 0){
       echo("Can't divide by zero <br>");
     } else {
       echo("Division result: ".htmlspecialchars($number1/$number2).".<br>");
     }
       ?>

  </body>
</html>
