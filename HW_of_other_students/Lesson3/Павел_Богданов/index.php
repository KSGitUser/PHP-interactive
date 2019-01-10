<?php

echo "<h4>Задание №1 </h4>";
$week = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресение'];
foreach ($week as $value) {
	echo $value . "<br>";
}


echo "<h4>Задание №2 </h4>";
$arr = [];
for ($i=1; $i <= 10; $i++) {
	$arr[] = $i;
}
echo var_dump($arr);
echo "<br>";
// вариант 2 задания 2
$num = range(1,10);
echo var_dump($num);

echo "<h4>Задание №3 </h4>";
$ar = ['fst', 'snd', 'thd', 'fth'];
echo $ar[rand(0, count($ar) - 1)];
echo "<br>";


echo "<h4>Задание №4 </h4>";
// Пусть имеется массив ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'], получите из него новый массив, содержащий только уникальные элементы ['fst', 'snd', 'thd', 'fth'].

$a = ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'];
$b = array_slice($a, 0, 4);
print_r($b);

echo "<h4>Задание №5 </h4>";
$array = [];
$arr_count =  rand(5, 10);
for ($i = 0; $i <= $arr_count; $i++) {
    $array[]=rand(0, 100);
}
// выводим массив до сортировки
print_r($array);
echo "<br>";
// сортируем массив
sort($array);
//выводим после ортировки
print_r($array);
