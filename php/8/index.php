<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 8 (Massiv)</title>
  </head>
  <body>
    
    <?php
      error_reporting(-1);

      $arr = array("Ivanov", "Petrov", "Sidorov");
      // var_dump($arr);
      /* $var = 'Ivanov';
      echo $var; */

      // echo $arr;
      echo "<pre>";
      print_r($arr);
      echo "</pre>";

      // echo $arr[2];

      $arr2 = [1, 2, 'cat', 4, ['banan', 'orange', 'apple'], 6, 7, 8, 9, 10,];
      echo "<pre>";
      print_r($arr2);
      echo "</pre>";

      echo $arr2[4][1];

      $arr3 = [2 => "Ivanov",
              4 => "Petrov",
              10 => "Sidorov"
      ];
      echo "<pre>";
      print_r($arr3);
      echo "</pre>";



      $goods = [
            [
              'title' => "Nokia",
              'price' => 100,
              'description' => "Description",
            ],
            [
              'title' => "Samsung",
              'price' => 130,
              'description' => "Description",
            ],
            [
              'title' => "LG",
              'price' => 200,
              'description' => "Description",
            ],
      ];
      echo "<pre>";
      print_r($goods);
      echo "</pre>";

      echo $goods[0]['title'] . ' - ' . $goods[0]['price'];

      $i = 0;
      while ($i <= 2) {
        echo '<div> ' . $goods[$i]['title'] . ', Price - ' . $goods[$i]['price'] . '; ' . $goods[$i]['description'] . ' </div><br>';
        $i++;
      }

    ?>



  </body>
</html>