<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      <?php

        $num1 = filter_input(INPUT_POST,"num1");

        $num2 = filter_input(INPUT_POST,"num2");

        $suma = $num1 + $num2;

      ?>

      <h1>La suma es
      <?php
     
     echo $suma;
    
    ?>
      </h1>

</body>
</html>