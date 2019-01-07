<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 11</title>
  </head>
  <body>
    <?php
      $arr = array("Ivanov", "Petrov", "Sidorov");

      $arr[5] = 'Pupkin';
      $arr[] = 'Doe';
      // print_r($arr);
      // echo "<br>";
      $names = [
        'Ivan' => 'Ivanov',
        'Petr' => 'Petrov',
        'Sidor' => 'Sidorov',
      ];
      echo "<pre>";
      print_r($names);
      echo "</pre>";

      /* foreach ($names as $name) {
        echo $name . "<br>";
      } */

      /* foreach ($names as $key => $surname) {
        echo "Name: $key, Surname: $surname<br>";
      } */

      /* foreach ($arr as $k => $v) {
        echo "Key: $k, Name: $v<br>";
      } */
      /* $a = 2;
      if ($a > 3 or $a < 7) {
        echo "OK";
      } else {
        echo "NO";
      } */

      /* for ($i = 0; $i <= 30; $i++) {
        echo $i . "<br>";
        if ($i == 5) {
          echo "Элемент найден: $i";
          break;
        }
      } */
      for ($i = 0; $i <= 30; $i++) {
        
        if ($i > 10 AND $i < 20) {
          continue;
        }
        echo $i . "<br>";
      }


    ?>
  </body>
</html>