<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
  header('HTTP/1.0 403 Forbidden');
  exit('Недопустимое обращение к странице');
}

$catalog_id = intval($_GET['catalog_id']);

$query = 'SELECT * FROM products WHERE catalog_id = :catalog_id';
$results = $pdo->prepare($query);
$results->execute(['catalog_id' => intval($_GET['catalog_id'])]);

while($product = $results->fetch(PDO::FETCH_ASSOC)) {
  echo "<h2><small>" . htmlspecialchars($product['name']) . "</small></h2>";
  echo "<p>Описание: " . htmlspecialchars($product['description']) . "</p>";
  echo "<button type='button' class='btn btn-primary'>". "Купить за " . htmlspecialchars($product['price']) . " руб</button>";

}