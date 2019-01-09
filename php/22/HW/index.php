<?php
  error_reporting(-1);
  if (!empty($_POST['imy']) AND !empty($_POST['text'])) {
    $date = date('Y-m-d H:i:s');
    $content = $_POST['imy'] . ': ' . $_POST['text'] . ' - ' . $date . "\n***\n";
    $file = 'DB.txt';

    echo $content;
    
    
    file_put_contents($file, $content, FILE_APPEND);
    $_POST['res'] = '<br>Данные записаны';
    // $_POST['imy'] = NULL;
    // $_POST['text'] = NULL;
    
    
  } else {
    $_POST['res'] = 'Вы не ввели одно из полей';
  }
  function vyvod() {
    echo '<br>';
    $file = file_get_contents('DB.txt');
    echo nl2br($file);
  }

  if (!empty($_POST['res'])){
    echo $_POST['res'];
  }
  // header("Location: index.php");
?>


<form action="" method="post">
  <p>
    <input type="text" name="imy">
  </p>
  <p>
    <textarea name="text" id="" cols="30" rows="10"></textarea>
  </p>
  <p>
    <button type="submit">Send</button>
  </p>
</form>

<form action="vyvod.php">
  <button type="submit">Вывести все записи</button>

</form>

