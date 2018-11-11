<?php

class Person
{

  public $name;
  public $age;

  public function __contruct($name)
  {
    $this->name = $name;
  }

  public function setAge($age)
  {
    if ($age < 18)
    {

      throw new \Exception("Error Processing Request");

    }

    $this->age = $age;
  }

  public function getAge()
  {
    return $this->age;
  }

}

$john = new Person();
$john->setAge(34);
$john->age = 4;
$john->name = 'Joe Doe';

var_dump($john->getAge());
