<?php

require_once 'classes/Car.php';

function debag($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();
// debag($car1);

$car1->color = 'Черный';
$car1->brand = 'Volvo';
$car1->speed = 200;
$car1->year = 2018;
$car1->colour = 'Red';
// debag($car1);

$car2->color = 'White';
$car2->brand = 'BMW';
$car2->speed = 300;
$car2->year = 2017;
// debag($car2);

echo "<h3>О моем Авто</h3>
Марка: {$car1->brand}<br>
Цвет: {$car1->color}<br>
Кол-во колес: {$car1->wheels}<br>
Год выпуска: {$car1->year}<br>
Скорость: {$car1->speed}<br>";