<?php
/* 5. *По желанию. Создайте массив со случайным количеством элементов от 5 до 10, элементы которого принимают случайное значение от 0 до 100. Отсортируйте элементы массива в порядке от наименьших к наибольшим значениям. */

$numberOfElements = rand(5,10);
$newArr = [];
for ($i = 0; $i < $numberOfElements; $i++) {
  $newArr[] = rand(0,100);
}

sort($newArr, SORT_NUMERIC);

print_r($newArr);