<?php
/* 1. Составьте массив, состоящий из названий дней недели на русском языке. Выведите каждый день недели на отдельной строке.*/

$daysOfWeek = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресение'];

foreach($daysOfWeek as $value) {
  echo $value . "<br />";
}