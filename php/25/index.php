<?php

// echo $user = isset($_GET['user']) ? $_GET['user'] : 'guest';
// Ветвление выбора заданных значений в массивах _POST и _GET
// echo $user = $_GET['user'] ?? $_GET['user2'] ?? 'guest';



/* $a = 1;
$b = 2; */

// echo $a <=> $b;
// Оператор ветвление принимающий значения () 1 / -1 / 0 ) В зависимости от равества выражения
/* if (($a <=> $b) === 1) {
  echo '$a > $b';
} elseif (($a <=> $b) === -1) {
  echo '$a < $b';
} else {
  echo '$a = $b';
} */


// Массив констант
/* define('DBHOST', 'localhost');
define('DBHOST', 'login');
define('DBHOST', 'password');
define('DBHOST', 'database'); */

// Не индексированный массиы
/* define('DB', [
  'localhost',
  'login',
  'password',
  'database',
]); */

// Индексированный массив
/* define('DB', [
  'DBHOST' => 'localhost',
  'DBUSER' => 'login',
  'DBPASS' => 'password',
  'DBBASE' => 'database',
]);

echo '<pre>';
print_r(DB);
echo DB['DBBASE']; */

// Груповая декларация use
// До PHP 7 объекты надо было поотдельности прописывать
/* use classes\controllers\Controller;
use classes\controllers\PageController;
use classes\models\Model;
use classes\models\PageModel; */

// В PHP 7 можно указать следующим образом:
use classes\controllers\{Controller, PageController};
use classes\models\{Model, PageModel};

spl_autoload_register(function($class) {
  $file = str_replace('\\', '/', $class) . '.php';
  if(is_file($file)) {
    require_once $file;
  }
});

new Controller();
new PageController();
new Model();
new PageModel();