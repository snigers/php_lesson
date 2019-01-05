<?php
  /*
    boolean: true || false
    integer
    float
    string
  */

  $isAuth = true;

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

  <?php
    //var_dump($isAuth);
    //echo $isAuth;
    //echo gettype($isAuth);
    //$int = "123";
    //var_dump($int + 20);
    //$fl = 1.2;
    //var_dump($fl);
    $var = 4;
    echo $str = 'This is \'string\'. $var';
    $str2 = "This is string $var";
    //HEREDOC
    $str3 = <<<HERE
      This ""is ""string $var
HERE;

    echo $str3;

    //NOWDOC
    $str4 = <<<'HERE'
      This ""is ""string $var
HERE;

    echo $str4;
    //var_dump($str2);
  ?>
</body>
</html>