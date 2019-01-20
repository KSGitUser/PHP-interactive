<?php

class Coordinates
{
  public $coord;

  public function __construct($x, $y, $z)   
  {
    $this->coord = ['x' => $x, 'y' => $y, 'z' => $z];
  }
}