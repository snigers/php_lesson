<?php
error_reporting(-1);

if (isset($_POST['Submit'])) {
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
}

if (isset($_GET['Submit'])) {
  echo "<pre>";
  print_r($_GET);
  echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 18</title>
  </head>
  <body>

    <form action="index.php" method="post">
      <p>
        <input type="text" name="name">
      </p>
      <p>
        <textarea name="text" id="" cols="30" rows="10"></textarea>
      </p>
      <p>
        <input type="checkbox" name="remember">
      </p>
      <p>
        <select name="lang[]" multiple="">
          <option value="eng">English</option>
          <option value="ru">Russian</option>
          <option value="ch">China</option>
        </select>
      </p>

      <p>
        <button type="submit" name="Submit" value="test">Submit</button>
      </p>

      <hr>

      <a href="index.php?name=Pety&amp;test=123&subject=TEST">link</a>

      <p>Введенное имя: <?php if (!empty($_POST['name'])) {echo $_POST['name'];} 
        else {echo 'Форма не отпправлена!';} ?></p>
      

      <?php ?>

      <p>Введенный текст: <?php echo !empty($_POST['text']) ? nl2br($_POST['text']) : 'Форма на отправленна';?></p>
      <p>
        <?php if (isset($_POST['remember']) AND ($_POST['remember'] == 'on')) echo 'Чек-бокс был отмечен'; ?>
      </p>
    
    </form>
    <?php






    ?>
  </body>
</html>