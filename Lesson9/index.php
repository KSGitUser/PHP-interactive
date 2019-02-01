<?php
session_start();
spl_autoload_register();

if(!isset($_SERVER['PHP_AUTH_USER']) || 
  !($_SERVER['PHP_AUTH_USER'] == 'hello' && $_SERVER['PHP_AUTH_PW'] == 'php')) {
    header("WWW-Authenticate: Basic realm=\"Shop\"");
    header("HTTP/1.0 401 Unauthorized"); // заголовки для базовой аутентификации
    exit();
  }



require_once('db_connect.php');
require_once('header.php');

require('menu.php');




     if (empty($_GET['catalog_id'])) {
      require_once('catalogs.php');
    } else {
   
      require_once('list.php');
    } 

require('menu.php');
    
require_once('footer.php');