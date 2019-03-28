<?php

class Car
{
  public $color;
  public $wheels;
  public $speed;
  public $brand;

  public function __construct($color, $wheels=4, $speed=180, $brand)
  {
    $this->color = $color;
    $this->wheels = $wheels;
    $this->speed = $speed;
    $this->brand = $brand;
    echo __METHOD__ . '<br>';
  }



  public function getLorem() {
    ?>
    <div>Hello, world!</div>
    <?
  }

  public function getCarInfo() {
    return "<h3>О моем Авто</h3>
    Марка: {$this->brand}<br>
    Цвет: {$this->color}<br>
    Кол-во колес: {$this->wheels}<br>
    Скорость: {$this->speed}<br>";
  }

  public function __destruct()
  {
    var_dump($this);
    
  }
}