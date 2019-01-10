<?php
echo "<h4>Задание №1 </h4>";
$fst = 10;
$snd = 20;

echo "\$fst = $fst \$snd = $snd <br>";

$fst += $snd;
$snd = $fst - $snd;
$fst -= $snd;

echo "\$fst = $fst \$snd = $snd";


echo "<h4>Задание №2 </h4>";
//2. Пусть есть две точки на декартовой системе координат (1, 3) и (6, 5). Вычислите расстояние между ними.

$ax = 1;
$ay = 3;

$bx = 6;
$by = 5;

$res = (($bx - $ax) ** 2 + ($by - $ay) ** 2) ** 0.5;

echo "Расояние от точки А ($ax:$ay) до точки Б ($bx:$by) = $res";

echo "<h4>Задание №3 </h4>";

echo "<h4>Задание №4 </h4>";
$number = rand(1, 100); // берем случайное число
if ($number % 2) {
	echo "Число $number не чётное";
} else {
    echo "Число $number чётное";
}
