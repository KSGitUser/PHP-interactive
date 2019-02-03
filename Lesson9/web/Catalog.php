<?php

namespace app\models;

class Catalog {

  private static $_object = null;
  private $catalogs = [];

  public static function instance($pdo)
  {
    if (is_null(self::$_object)) {
      self::$_object = new self($pdo);
    }

    return self::$_object;

  }

  public function items()
  {
    return $this->catalogs;
  }

  private function __construct($pdo)
  {
    $query = 'SELECT * FROM catalogs ORDER BY name';
    $results = $pdo->query($query);

    while($this->catalogs[] = $results->fetch(\PDO::FETCH_ASSOC));
  }

  private function __clone() 
  {

  }

}