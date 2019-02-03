<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
  header('HTTP/1.0 403 Forbidden');
  exit('Недопустимое обращение к странице');
}

$catalogs = models\Catalog::instance($pdo);
$menu = [];
$menu['/Lesson9/web/'] = 'Главная страница';

if (isset($_SESSION['user_id'])) {
    $menu['/Lesson9/controllers/logout.php'] = 'Выход (' . htmlspecialchars($_SESSION['user_name']) . ')';
} else {
    $menu['/Lesson9/controllers/login.php'] = 'Вход';
}


foreach($catalogs->items() as $catalog) {
  $menu["/Lesson9/web/index.php?catalog_id={$catalog['id']}"] = $catalog['name'];
}

echo '<ul class="list-inline">';
foreach($menu as $link => $item) {
  echo "<li class='list-inline-item'><a href='{$link}'>" . htmlspecialchars($item) . "</a></li>";
}
echo '</ul>';