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

      echo count($goods, 1)


    ?>




  </body>
</html>