<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 10</title>
  </head>
  <body>
    
    <?php
      $arr = array("Ivanov", "Petrov", "Sidorov");

      $arr[5] = 'Pupkin';
      $arr[] = 'Doe';
      print_r($arr);
      echo "<br>";
      $names = [
        'Ivan' => 'Ivanov',
        'Petr' => 'Petrov',
        'Sidor' => 'Sidorov',
      ];
      print_r($names);
      echo "<br>";
      for ($i = 0; $i <= count($arr); $i++) {
        echo $arr[$i] . "<br>";
      }
      echo "<br>";
      echo "<select>";
      for ($i = 1900; $i <=2019; $i++) {
        echo "<option value='$i'>$i</option>";
      }
      echo "</select>";



    ?>
    


  </body>
</html>