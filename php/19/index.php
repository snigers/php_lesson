<?php
  error_reporting(-1);
  /* echo '<pre>';
  print_r($_SERVER);
  echo '</pre>'; */
  echo '<pre>';
  // print_r($_SERVER['PHP_SELF']);
  // print_r($_SERVER['SERVER_NAME']);
  // print_r($_SERVER['QUERY_STRING']);
  // print_r($_SERVER['HTTP_REFERER']);
  // print_r($_SERVER['REMOTE_ADDR']);
  print_r($_SERVER['SERVER_ADMIN']);
  echo '</pre>';


  if (isset($_POST['send'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
  }

  if (!empty($_FILES)) {
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 19</title>
  </head>
  <body>
    
    <form method="post" action="" enctype="multipart/form-data">
      <p>
        <input type="text" name="name">
      </p>
      <p>
        <textarea name="text" id="" cols="30" rows="10"></textarea>
      </p>
      <p>
        <input type="file" name="file">
      </p>
      <p>
        <button type="submit" name="send" value="test">Send</button>
      </p>
    
    </form>

    <hr>











  </body>
</html>