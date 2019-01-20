<?php

class Point
{

  private static $count = 0;
  public $numberOfPoint;

  public function __construct($numberOfPoint)
  {
    self::$count++;
    $this->numberOfPoint;
  }

  public function getObjectCount()
  {
    return static::$count;
  }

  public function __destruct()
  {
    self::$count--;
  }
}