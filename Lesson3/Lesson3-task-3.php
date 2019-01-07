<?php
/* 3. Пусть имеется массив ['fst', 'snd', 'thd', 'fth'], выведите случайный элемент массива. */

$arr = ['fst', 'snd', 'thd', 'fth'];

$numberOfEl = count($arr) - 1;

$arrNumber = rand(0,$numberOfEl);

echo $arr[$arrNumber];