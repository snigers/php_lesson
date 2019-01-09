<?php
session_start();
// $_SESSION['name'] = 'Anton';
// $_SESSION['login'] = 'anton';

// echo $_SESSION['name'];
// var_dump($_SESSION);
// unset($_SESSION['name']);
// session_unset();
// session_destroy();
define('ADMIN', 'admin');
if (!empty($_POST['login'])) {
  if ($_POST['login'] === ADMIN) {
    $_SESSION['admin'] = ADMIN;
    $_SESSION['res'] = 'Вы успешно авторизовались';
    header("Location: sess1.php");
    die;
    // echo 'Вы успешно авторизовались';
  } else {
    $_SESSION['res'] = 'Неверный логин';    
  }
  header("Location: sess1.php");
  die;
}
?>


<ul>
  <li><a href="sess1.php">Sess1</a></li>
  <li><a href="sess2.php">Sess2</a></li>
  <li><a href="secret.php">Secret</a></li>
</ul>

<hr>

<?php 
  if (isset($_SESSION['res'])) {
    echo $_SESSION['res'];
    unset($_SESSION['res']);
  }
?>

<form action="" method="post">
  <input type="text" name="login">
  <button type="submit">Login</button>

</form>