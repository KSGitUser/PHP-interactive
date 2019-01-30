<?php

$message = '';
if (isset($_POST['qty']) && isset($_POST['price'])) {

  $qty = $_POST['qty'];

  $is_var_integer=(is_numeric($qty)&&(intval($qty)==floatval($qty)));
  
  if ($is_var_integer && is_numeric($_POST['price'])) {
    $result = $_POST['qty'] * $_POST['price'];
  } else {
    $message = 'Формат данных не соответствует';
    return;
  }
  
  $message = "Стоимость товара - {$result}";
  
header("Location: ".$_SERVER["HTTP_SELF"]);
}







