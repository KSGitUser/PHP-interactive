<?php

/* 1. Создайте класс Point, объект которого бы моделировал точку в трехмерном декартовом пространстве. Создайте скрипт, который бы используя объекты класса Point, вычислял расстояние между двумя точками пространства.
2. Создайте класс User, объект которого хранил бы имя, фамилию и отчество пользователя.
3. *По желанию. Создайте класс Point. Реализуйте его таким образом, чтобы в каждый момент времени была возможность узнать, сколько объектов класса объявлено в настоящий момент. */

require_once './Coordinates.php';
require_once './User.php';
require_once './Point.php';

$point1 = new Coordinates(3,5,6);
$point2 = new Coordinates(5,10,12);


function distanceBetweenPoints(Coordinates $point1, Coordinates $point2)
{
  $distance = sqrt(($point2->coord['x']-$point1->coord['x'])**2+($point2->coord['y']-$point1->coord['y'])**2+($point2->coord['z']-$point1->coord['z'])**2);
  return $distance;
}


echo distanceBetweenPoints($point1, $point2);

$fio = new User('Иванов', 'Иван', 'Иванович');

var_dump($fio);


$obj1 = new Point(1);
$obj2 = new Point(2);
$obj3 = new Point(3);

echo $obj3->getObjectCount(); //3

unset($obj2);

echo '<br />';

echo $obj3->getObjectCount(); //2
