<?php

use \app\{NoteBookProduct, BookProduct};
use \wfm\interfaces\IGadget;

require_once __DIR__ . '/vendor/autoload.php';


/* error_reporting(-1);

function autoloder1($class) {
  echo $class . '<br>';
  $class = str_replace("\\", '/', $class);
  $file = __DIR__ . "/{$class}.php";
  if (file_exists($file)) {
    require_once $file;
  }
}


spl_autoload_register('autoloder1'); */

function debug($data) {
  echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(IGadget $product) {
  echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкитера', 20, 1000);
$notebook = new NotebookProduct('Dell', 20, 'Intel');

offerCase($notebook);

debug($book);
debug($notebook);
