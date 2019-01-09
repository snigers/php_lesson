<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 17</title>
  </head>
  <body>
    <?php
      /* echo date_default_timezone_get();
      echo "<br>";
      date_default_timezone_set('Europe/Rome');
      echo date_default_timezone_get();
      echo "<br>"; */

      /* date_default_timezone_set('Europe/Moscow');
      echo date('Y-M-d a H:i:s', time()); */

      // echo '2010 - '. date(Y);
      // phpinfo();
      /* $date = getdate();
      print_r($date);
      echo '<br>' . $date; */

      // echo date('Y-M-d H:i:s', strtotime("+1 day 1 hour"));

      /* echo time();
      echo '<br>';
      echo mktime( date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
      echo '<br>';
      echo date('Y-M-d H:i:s', mktime(1, 2, 3, 2, 3, 4));

      echo '<br>';
      $t = mktime( date("H"), date("i"), date("s"), date("m"), date("d"), date("Y")+1);
      echo date('Y-M-d H:i:s', $t);

      $date = date_create(date('Y-m-d H:i:s'));
      // print_r($date);
      echo date_format($date, 'Y-m-d H:i:s');
      date_add($date, date_interval_create_from_date_string('2 days + 2 hours + 10 minutes'));
      echo '<br>';
      echo date_format($date, 'Y-m-d H:i:s'); */

      // echo microtime();

      // var_dump(microtime());
      $start = microtime(true);
      // usleep(1000000);
      for ($i = 1; $i <= 100000000; $i++){
        if ($i == 100000000) {
          echo 'Countdown complite<br>';
        }
      }
      $end = microtime(true);
      echo $end - $start;






    ?>
  </body>
</html>