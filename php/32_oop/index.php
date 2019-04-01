<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

echo Car::getCount();
echo '<br>';
$car1 = new Car('Черный', 4, 180, 'volvo');
echo Car::getCount();
echo '<br>';
$car2 = new Car('Черный', 4, 200, 'bmw');
echo Car::getCount();
echo '<br>';


echo $car1->getCarInfo();
echo $car2->getCarInfo();
// echo $car2->Test();
echo $car1->getPrototypeInfo();
echo $car1::TEST_CAR_SPEED;

// Переменная class в ней имя класса, пока не нужно, но полезна при применение пространства имен.
echo Car::class;

$car1->getLorem();