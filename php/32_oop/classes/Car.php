<?php

class Car
{
  public $color;
  public $wheels;
  public $speed;
  public $brand;

  const TEST_CAR = 'Прототип';
  const TEST_CAR_SPEED = 300;

  public static $countCar = 0;

  public function __construct($color, $wheels=4, $speed=180, $brand)
  {
    $this->color = $color;
    $this->wheels = $wheels;
    $this->speed = $speed;
    $this->brand = $brand;

    // увеличение счетчика на 1
    self::$countCar++;
    
    echo __METHOD__ . '<br>';
  }

  public static function getCount() {
    return self::$countCar;
  }

  public function test() {
    echo "Hello World";
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

  public function getPrototypeInfo() {

    return "<h3>Данные тестового авто:</h3>
    Наименование: " . self::TEST_CAR . "<br>
    Скорость: " . self::TEST_CAR_SPEED . "<br>";
  }
}