<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 7</title>
  </head>
  <body>
    <?php
      /* if (expression) {
        instructions;
      } */
      // $var = false;
      /* $var = 0;
      var_dump((bool) $var);
      $light = 'red';
      if ($light == 'green') {
        echo 'We may go';
      } else {
        echo 'Stop';
      } */

      /* if (5 > 3) {
        echo "OK";
      } */
      
      $light = 'yellow';
      if ($light == 'green') {
        echo 'We may go';
      } elseif ($light == 'yellow') {
        echo 'We may ready';
      } else {
        echo 'We must stop';
      }
      

    ?>
  </body>
</html>