<?php
  header("Content-type: text/html; charset=utf-8");
  error_reporting(-1);
  require_once 'connect.php';
  require_once 'funcs.php';

  if (!empty(@$_POST)) {
    save_mess();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
  }

  $messages = get_mess();
  // print_arr($messages);
  // $messages = array_mess($messages);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Гостевая Книга</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <style>
    .message {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 20px;
    }
    
  </style>

</head>
<body>
  <form action="index.php" method="post">
    <p>
      <label for="name">Имя:</label><br>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="text">Текст:</label><br>
      <textarea name="text" id="text"></textarea>
    </p>
    <button type="submit">Написать</button>
  
  </form>

  <hr>

  <?php if(!empty($messages)): ?>
    <?php foreach($messages as $message): ?>
      <div class="message">
        <p>Автор: <?=$message['name']?> | Дата: <?=$message['date']?></p>
        <div><?=nl2br(htmlspecialchars($message['text']))?></div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</body>
</html>