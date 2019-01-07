<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 12</title>
  </head>
  <body>
    <?php
      error_reporting(-1);

      /* $var = 3;

      switch ($var) {
        case 1:
          echo 'Variable = 1';
          break;
        case 2:
          echo 'Variable = 2';
          break;
        case 3:
          echo 'Variable = 3';
          break;
        case 4:
          echo 'Variable = 4';
          break;
        case 5:
          echo 'Variable = 5';
          break;
        default:
          echo 'Something else...';
          break;
      } */
      
      $bool = true;
      $str1 = 1;
      $str2 = 2;
      $str3 = 3;

      /* if ($bool) {
        echo "<table class=\"table\" border='1'>
                <tr>
                  <td>$str1</td>
                  <td>$str2</td>
                  <td>$str3</td>
                </tr>
              </table>";
      } */

    ?>

    <?php if($bool): ?>
      <table class="table" border="1">
        <tr>
          <td><?php echo $str1 ?></td>
          <td><?php echo $str2 ?></td>
          <td><?php echo $str3 ?></td>
        </tr>
      </table>
    <?php endif; ?>
    

    <?php
      $names = [
        'Ivan' => 'Ivanov',
        'Petr' => 'Petrov',
        'Sidor' => 'Sidorov',
      ];
    ?>


    <?php foreach ($names as $key => $surname): ?>
        Name: <?php echo $key ?>, Surname: <?php echo $surname ?> <br>
    <?php endforeach; ?>

    

  </body>
</html>