<?php

/* Домашнее задание
Нужно написать класс работы с файлом
Ссылка на пример: 
http://ie2.php.net/manual/ru/function.fwrite.php#refsect1-function.fwrite-examples */

require_once 'classes/Car.php';

function debag($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car('Черный', '', '', 'Volvo');

$car2 = new Car('Черный', '', '', 'BMV');

echo $car1->getCarInfo();
echo $car2->getCarInfo();

$car1->getlorem();
