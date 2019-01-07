<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 14</title>
  </head>
  <body>
    <?php
      error_reporting(-1);
      require_once 'funcs.php';

      $nums = [1, 2, 3, 4, 5];
      $names = ['Ivanov','Petrov','Sidorov'];
      $names2 = ['Ivan' => 'Ivanov','Petr' => 'Petrov', 'Sidr' => 'Sidorov'];
      /* echo count($nums) . "<br>";
      echo count($names) . "<br>"; */

      $keys = array_keys($nums);
      print_r($keys);
      echo "<br>";
      $keys2 = my_array_keys($nums);
      print_r($keys2);
      echo "<br>";
      $keys3 = my_array_keys($names);
      print_r($keys3);
      echo "<br>";
      $keys4 = my_array_keys($names2);
      print_r($keys4);
      echo "<br>";
      /* $a = 200;


      $x = 12;
      $y = 12;
      sum($x, $y);
      sum(3, 4);
      sum(12, 4);
      sum(4, 7);
      sum(); */

      /* $a = 5;
      $b = 10;
      echo $a;
      echo "<br>";
      sum($a, $b);
      echo $a; */

      $res = sum(1,2);
      echo $res;





    ?>
  </body>
</html>