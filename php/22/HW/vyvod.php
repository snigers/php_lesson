<a href="index.php">Назад</a>
<?php
  echo '<br>';
  $file = file_get_contents('DB.txt');
  echo nl2br($file);
?>

