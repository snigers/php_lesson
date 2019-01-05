<?php
  define("PAGE", "new page");
  define("PAGE", "new page2");

  const PAGE2 = 'new const';

  $title = 'Hello world!';
  $title = 'page title';  

  $fruit = 'orange';
  $winnieThePooh = "Hello, I'm Winnie. I have 2 {$fruit}s"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title?></title>
</head>
<body>
  <h1><?php echo PAGE;?></h1>
  <p><?php echo $winnieThePooh;?></p>
  <p><?php echo PAGE2;?></p>
  
  
</body>
</html>