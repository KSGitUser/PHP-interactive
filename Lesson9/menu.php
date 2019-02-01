<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
  header('HTTP/1.0 403 Forbidden');
  exit('Недопустимое обращение к странице');
}

$catalogs = Models\Catalog::instance($pdo);
$menu = [];
$menu['/Lesson9/'] = 'Главная страница';

if (isset($_SESSION['user_id'])) {
    $menu['/Lesson9/logout.php'] = 'Выход (' . htmlspecialchars($_SESSION['user_name']) . ')';
} else {
    $menu['/Lesson9/login.php'] = 'Вход';
}



foreach($catalogs->items() as $catalog) {
  $menu["/Lesson9/index.php?catalog_id={$catalog['id']}"] = $catalog['name'];
}

echo '<ul class="list-inline">';
foreach($menu as $link => $item) {
  echo "<li class='list-inline-item'><a href='{$link}'>" . htmlspecialchars($item) . "</a></li>";
}
echo '</ul>';