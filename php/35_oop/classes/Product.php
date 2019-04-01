<?php

class Product
{
  private $name;
  protected $price;

  private $discount = 10;

  // public $public = 'PUBLIC';
  // protected $protected = 'PROTECTED';
  // private $private = 'PRIVATE';

  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;

  }

  public function getProduct() {
    return "<hr><b>О товаре:</b><br>
            Наименование: {$this->name}<br>
            Цена со скидкой: {$this->getPrice()}<br>";
  }

  public function getPrice() {
    return $this->price - ($this->discount / 100 * $this->price);
  }

  public function getDiscount(): int {
    return $this->discount;
  }

  public function setDiscount(int $discount) {
    $this->discount = $discount;
  }
}