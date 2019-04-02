<?php
require_once 'classes/IGadget.php';
abstract class Product
{
  private $name;
  protected $price;

  private $discount = 10;

  const TEST = 10;

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

  public function getName() {
    return $this->name;
  }

  public function setDiscount(int $discount) {
    $this->discount = $discount;
  }

  abstract protected function addProduct($name, $price); //абстрактный метод не должен содержать тело метода, он является описательным
}