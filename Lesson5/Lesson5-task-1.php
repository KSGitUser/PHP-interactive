<?php
/* 1. Прочитайте содержимое текущего каталога в массив. Сохраните этот набор строк в файл current.txt таким образом, чтобы имя каждого файла и каталога располагались на отдельных строках. */

$arrOfDir = scandir('.');
$outputContent = implode(PHP_EOL, $arrOfDir);

/* foreach ($arrOfDir as $item) {
  $outputContent .= $item . PHP_EOL;
} */
$fd = file_put_contents('current.txt',$outputContent);

