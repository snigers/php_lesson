<?php

namespace app;

use \wfm\interfaces\I3D;
use \wfm\Product;

class BookProduct extends Product implements I3D
{
  
  public $numPages;

  public function __construct($name, $price, $numPages)
  {
    parent::__construct($name, $price);
    $this->numPages = $numPages;
    $this->setDiscount(5);
    var_dump(self::class);
  }

  public function getProduct() {
    $out = parent::getProduct();
    $out .= "Цена без скидки: {$this->price}<br>";
    $out .= "Колличество страниц: {$this->numPages}<br>";
    $out .= "Скидка: {$this->getDiscount()}%<br>";
    return $out;
  }

  public function getNumPages() {
    return $this->numPages;
  }

  public function test() {
    
  }

  public function addProduct($name, $price, $numPages = 0) { //Можно добавлять дополнительные параметры, но их нужно обнулять
    var_dump($name);
    var_dump($price);
    var_dump($numPages);
  }

}