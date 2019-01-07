<?php 
  require_once 'inc.php';
  // header('Content-Type: text/html; charset=utf-8');
  header('Content-Type: text/plain; charset=utf-8');
  header('Content-Disposition: attachment; filename="downloaded.txt"');
  readfile('text.txt');

  // header('HTTP/1.0 304 Not Modified')
  // header('Location: inc.php');
  // header('refresh: 5; url=inc.php');
  exit;
  // die;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 15</title>
  </head>
  <body>
    
    <?=$test?> 

     Привет мир!!!







    
  </body>
</html>