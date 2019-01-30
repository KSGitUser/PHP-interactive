<?php
/* 1. Средствами расширения PDO создайте таблицу monthes, предназначенную для хранения названий месяцев. Заполните ее. Составьте запрос, который извлекает случайную запись из таблицы monthes. */

$pdo = new PDO('mysql:host=localhost; dbname=shop_interactive', 'root', '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = "CREATE TABLE IF NOT EXISTS months
        (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        month VARCHAR(25) NOT NULL)";
$tableCreate = $pdo->exec($query);

if ($tableCreate === false) {
  echo "не удалось создать таблицу";
  echo $pdo->errorInfo();
} 

$tableName = 'months';

$monthNames = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];

$placeHolders = implode(', ',array_fill(0, count($monthNames), '(null, ?)'));
$sql = "INSERT INTO {$tableName} VALUES {$placeHolders}";
$result = $pdo->prepare($sql);
$result -> execute($monthNames);

$randomSql = "SELECT * FROM {$tableName} ORDER BY RAND() LIMIT 1";
$randomMonth = $pdo->query($randomSql);
$month = $randomMonth->fetch(PDO::FETCH_ASSOC);

echo $month['month'];






