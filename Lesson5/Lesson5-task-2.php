<?php
/* 2. Возьмите любой текстовый файл, например, файл из предыдущего задания. Извлеките его содержимое в виде массива строк, поменяйте порядок следования строк на обратный и перезапишите содержимое исходного файла. */

$fileName = 'current.txt';
$arrContent = file($fileName);
$arrContent[count($arrContent)-1] .= PHP_EOL;
$reverseArr = array_reverse($arrContent);
$contentToFile = implode('',$reverseArr);
$fileOpened = fopen($fileName, 'r+');
fwrite($fileOpened, $contentToFile);
fclose($fileOpened);





