<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 8</title>
  </head>
  <body>
    
    <?php
      /* $i = 1;
      while ($i < 10000) {
        echo $i . "<br>";
        $i++;
      } */
      $i = 1;
      echo '<table border="1">' . "\n";
      while ( $i <= 9 ) {
        echo "\t<tr>\n";
        $j = 1;
        while ( $j <= 10 ) {
          echo "\t\t<td> $i * $j = " . $i * $j . "</td>\n";
          $j++;          
        }
        echo "\t</tr>\n";
        $i++;
      }
      echo "</table>";

      /* echo '<select>' . "\n";
      $i = 1900;
      while ( $i <= 2019 ) {
        echo "\t\t<option value='$i'> $i </option>\n";
        $i++;
      }
      echo "\t" . '</select>'; */

      // $i = 11;
/*       while ($i <= 10) {
        echo $i . "<br>";
        $i++;
      }  */
      /* $i = 11;
      do {
        echo $i . "<br>";
        $i++;
      } while ($i <= 10) */

    ?>



  </body>
</html>