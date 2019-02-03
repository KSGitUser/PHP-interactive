<?php
session_start();
/* spl_autoload_register(); */

require_once '../services/db_connect.php';

$errors = [];
if(!empty($_POST)) {
  if(empty($_POST['email'])) {
    $errors[] = 'Пожалуйста, введите электронный адрес (email)';
  }
  if(empty($_POST['password'])) {
    $errors[] = 'Пожалуйста, введите пароль';
  }
  if(!empty($_POST['password'])) {
    $query = 'SELECT * FROM users WHERE email = ?';
    $results = $pdo->prepare($query);
    $results->execute([$_POST['email']]);
    $user = $results->fetch(\PDO::FETCH_ASSOC);
    if(!$user) {
      $errors[] = 'Электронный адрес не зарегистрирован';
    }
    if(!password_verify($_POST['password'], $user['password'] ?? '')) {
      $errors[] = 'Пароль не подходит';
    }
    if(empty($errors)){
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['user_name'] = $user['name'];
      header('location: /Lesson9/web/');
    }
    
  }
}

require_once '../views/header.php';

/* require '../views/menu.php'; */

if(!empty($errors)) {
  echo '<div class="alert alert-danger col-md-6">';
  foreach($errors as $error) {
    echo "<div>{$error}</div>";
  }
  echo '</div>';
}
?>
<form action="/Lesson9/controllers/login.php" method="post" class="col-md-6">
  <div class="form-group">
    <label for="email_id">Email</label>
    <input type="email" name="email" class="form-control" id="emal_id"
           value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
  </div>
  <div class="form-group">
    <label for="password_id">Пароль</label>
    <input type="password" name="password" class="form-control" id="password_id"
           value="<?= $_POST['password'] ?? htmlspecialchars($_POST['password'] ?? '') ?>">
  </div>
  <button type="submit" class="btn btn-default">Вход</button>
</form>
<?php
/* require '../views/menu.php'; */

require_once '../views/footer.php';