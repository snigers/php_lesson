<?php

  header("Content-type: text/html; charset=utf-8");
  error_reporting(-1);
  require_once 'funcs.php';

  if (!empty($_POST)) {
    save_mess();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
  }

  $messages = get_mess();
  $messages = array_mess($messages);
  print_arr($messages);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <form action="index.php" method="post" width="300" height="400">
    <p>
      <label for="name">Имя:</label><br>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="text">Текст: </label><br>
      <textarea name="text" id="text" cols="30" rows="10"></textarea>
    </p>
    <p>
      <button type="submit">Написать</button>
    </p>  
  </form>
  <hr>
  <?php
    if (!empty($messages)) {
      foreach ($messages as $message) {
        echo '<div'
      }
    }



  ?>


</body>
</html>