<?php
session_start();
require_once __DIR__.'/../vendor/autoload.php';
/* spl_autoload_register(); */

if(!isset($_SERVER['PHP_AUTH_USER']) || 
  !($_SERVER['PHP_AUTH_USER'] == 'hello' && $_SERVER['PHP_AUTH_PW'] == 'php')) {
    header("WWW-Authenticate: Basic realm=\"Shop\"");
    header("HTTP/1.0 401 Unauthorized"); // заголовки для базовой аутентификации
    exit();
  }

require_once('../services/db_connect.php');
require_once('../views/header.php');

require('../views/menu.php');




     if (empty($_GET['catalog_id'])) {
      require_once('../views/product/catalogs.php');
    } else {
   
      require_once('../views/product/list.php');
    } 

require('../views/menu.php');
    
require_once('../views/footer.php');