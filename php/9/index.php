<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 9</title>
  </head>
  <body>
    
    <?php
      $arr = array("Ivanov", "Petrov", "Sidorov");

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

      // $result = array_rand($arr, 2);

      /* echo count($goods, 1);

      $array1 = array("a" => "green", "red", "blue", "red");
      $array2 = array("b" => "green", "yellow", "red");
      // $result = array_diff($array1, $array2);
      $result = array_intersect($array1, $array2); */
/*       $search_array = array('first' => 1, 'second' => 4);
      if (array_key_exists('first2', $search_array)) {
          echo "Массив содержит элемент 'first'.";
      } else {
        echo "NO";
      } */

      
      /* $array1 = array("color" => "red", 2, 4);
      $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
      $result = $array1 + $array2; */
      
      // $result = array_reverse($arr, true);
      /* $city  = "San Francisco";
      $state = "CA";
      $event = "SIGGRAPH";*/

      /* $result = [
        'city' => 'SF',
        'state' => 'CA',
        'event' => 'www',
      ];
      extract($result);
      echo $event; */
      // $result = compact('city', 'state', 'event');

      


      echo "<pre>";
      print_r($result);
      echo "</pre>";


    ?>




  </body>
</html>