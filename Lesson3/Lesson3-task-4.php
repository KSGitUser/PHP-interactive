<?php
/* 4. *По желанию. Пусть имеется массив ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'], получите из него новый массив, содержащий только уникальные элементы ['fst', 'snd', 'thd', 'fth']. */

$arr = ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'];

$newArr = array_unique($arr);

print_r($newArr);