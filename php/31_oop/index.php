<?php

/* Домашнее задание
Нужно написать класс работы с файлом
Ссылка на пример: 
http://ie2.php.net/manual/ru/function.fwrite.php#refsect1-function.fwrite-examples */
require_once 'classes/fwrite.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>
<body>
  <form action="" method="post">
    <p>введите имя файла:</p>
    <p>
      <input type="text" name="imy">
    </p>
    <p>Введите текст для записи:</p>
    <p>
      <textarea name="text" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
      <button type="submit" name="button">Send</button>
    </p>
  </form>

  <?php 
    if (isset($_POST['button']) AND (isset($_POST['imy']))) {
      $filename = $_POST['imy'] . '.txt';
      $somecontent = $_POST['text'];
      $file = new wrFile(__DIR__ . '/' . $_POST['imy'] . '.txt', $_POST['text']);
      echo "Запись!";
      $file->writefile();
      $file->vyvod();
    }
  ?>
  
  
</body>
</html>
