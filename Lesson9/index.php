<?php
spl_autoload_register();

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