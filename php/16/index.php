<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Lesson 16</title>
  </head>
  <body>
    <?php
      error_reporting(-1);
      /* $str = 'Иванов Иван Иванович';

      $arr = explode(' ', $str, 2);
      echo "<pre>";
      print_r($arr);
      echo "</pre>"; */
      
      /* $arr = ['Ivanov', 'Petrov', 'Sidorov'];
      $str = implode(', ', $arr);
      echo $str; */

      // $str = " Иванов Иван Иванович ";
      /* $str = "\t<p>Hello </p>\n";
      $str .= "\n<p>World!</p>\t";
      echo $str;
      echo trim($str, "\t"); */
      /* $str = "password";
      echo md5(md5($str)); */

      /* $str = "Hello\nWorld!\n";
      echo nl2br($str); */

      // $str = '[i]Привет![/i] Меня зовут [B]Иванов Иван Иванович[/b]';
      /* $str = str_replace('[b]', '<b>', $str);
      $str = str_replace('[/b]', '</b>', $str); */
      // $search = ['[b]','[/b]','[i]','[/i]'];
      // $replace = ['<b>','</b>','<i>','</i>'];
      // $str = str_replace($search, $replace, $str);
      // $str = str_ireplace($search, $replace, $str);
      // echo $str;

      /* $str = '<i>Привет!</i> Меня зовут <b>Иванов Иван Иванович</b>! <script>alert("XSS")</script>';
      echo strip_tags($str, '<b><i>'); */

      /* $str = '<i>Привет!</i> Меня зовут <b>Иванов Иван Иванович</b>!';
      echo mb_strlen($str, 'utf-8'); //второй параметр начиная с php 5.6 не обязателен */

      /* $str = 'Hello world!';
      // echo mb_strpos($str, 'ld',3);
      if ( mb_strpos($str, 'H') !== false ) {
        echo "OK";
      } else {
        echo "NO";
      } */

      /* $str = 'Hello world!';
      $str2 = 'HELLO WORLD!';
      echo $str . "<br>" . $str2 . "<br>";

      // echo mb_strtoupper($str, 'utf-8');
      echo mb_strtolower($str2); */
      
      /* $str = 'Hello world!';
      echo mb_substr($str, -6, 5, 'utf-8'); */

      // $str = '<i>Привет!</i> Меня зовут <b>Иванов Иван Иванович</b>! <script>alert("XSS")</script>';
      /* $str = '&amp;<i>Привет!</i> Меня зовут <b>Иванов Иван Иванович</b>! <iframe src="https://webformyself.com"
         width="100%"></iframe>';

      echo htmlspecialchars($str, ENT_QUOTES, 'utf-8', false);
      */




    ?>
  </body>
</html>