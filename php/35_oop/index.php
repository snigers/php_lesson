<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';

function debug($data) {
  echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProduct('Три мушкитера', 20, 1000);

debug($book);

// $book->discount = 50;

echo $book->getProduct();

// var_dump($book->public);
// var_dump($book->protected);
// var_dump($book->private);