<?php
  // setcookie('test', 'My value', time()+3600);

  /* setcookie('test', '', time() - 3600);
  setcookie('test2', '', time() - 3600, '/');

  echo $_COOKIE['test'];
  echo '<br>';
  echo $_COOKIE['test2']; */

  isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time() + 3600, '/') :
    setcookie('counter', 1, time() + 3600, '/');

  echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1;

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 21</title>
  </head>
  <body>
    





  </body>
</html>