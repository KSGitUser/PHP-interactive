<?php
$pdo = new PDO(
  'mysql:host = localhost; dbname=shopi', 'root', '',
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);