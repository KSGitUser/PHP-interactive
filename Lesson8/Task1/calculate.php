<?php

foreach ($_GET as $points) {
  foreach ($points as $point) {
    if (!is_numeric($point)) {
      $message = "Введенные координаты не являются числами";
      return;
    }
  }
}

$result = sqrt(pow(($_GET['p2']['x']-$_GET['p1']['x']),2)+pow(($_GET['p2']['y']-$_GET['p1']['y']),2));

if ($result) { 
  $message = "Расстояние между точками p1({$_GET['p1']['x']},{$_GET['p1']['y']}) и p2({$_GET['p2']['x']},{$_GET['p2']['y']}) составляет: {$result}";
} else {
  $message = '';
}





