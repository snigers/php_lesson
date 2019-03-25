<?php

// Приведение к строгой типизации передаваемых значений в функцию
/* declare(strict_types=1);

function sum(int ...$ints) {
  return array_sum($ints);
}

var_dump(sum(1, 2, 3)); */

// Приведение к строгой типизации ВОЗВРАЩАЕМЫХ значений функции
/* function sum($a, $b): float {
  return $a + $b;
}
var_dump(sum(2, 3)); */

// Функция целочисленного деления

var_dump(intdiv(10, 3));