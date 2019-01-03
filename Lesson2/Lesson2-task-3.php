<?php
/* *По желанию. Используя константы и обслуживающие их функции, добейтесь от конструкции require поведения require_once. */


if (defined('IS_INCLUDE')) {
  echo 'Файл уже включен в проект';
} else {
  require __DIR__ . '/' . 'required-file-for-task3-lesson2.php'; // 
}

//второй раз вызываем только для того чтобы показать, что константа уже опеределена

if (defined('IS_INCLUDE')) {
  echo 'Файл required-file-for-task3-lesson2.php уже включен в проект ';
} else {
  require __DIR__ . '/' .'required-file-for-task3-lesson2.php';
} 

