<?php

namespace app;

use \wfm\interfaces\IGadget;
use \wfm\Product;

class NotebookProduct extends Product implements IGadget
{
  
  public $cpu;

  public function __construct($name, $price, $cpu)
  {
    parent::__construct($name, $price);
    $this->cpu = $cpu;
  }

  public function getProduct() {
    $out = parent::getProduct();
    $out .= "Процессор: {$this->cpu}<br>";
    return $out;
  }

  public function getCase() {

  }

  public function getCpu() {
    return $this->cpu;
  }

  public function addProduct($name, $price, $numPages = 0) { //Можно добавлять дополнительные параметры, но их нужно обнулять
    var_dump($name);
    var_dump($price);
    var_dump($numPages);
  }

}