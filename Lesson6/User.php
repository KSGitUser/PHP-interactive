<?php

class User
{
  public $name;
  public $surname;
  public $patronymic;

  public function __construct(string $surname, string $name, string $patronymic)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->patronymic = $patronymic;
  }
}