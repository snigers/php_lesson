<?php

require_once 'classes/Car.php';

function debag($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car1->color = 'Черный';
$car1->brand = 'Volvo';

$car2 = new Car();
$car2->color = 'Черный';
$car2->brand = 'BMV';

echo $car1->getCarInfo();
echo $car2->getCarInfo();

