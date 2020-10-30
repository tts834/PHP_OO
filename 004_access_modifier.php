<?php

class Animal {

  // Every Class and Function can access

  public $name = 'Dog';

  // Only its Class
  //encapsulation
  private $touch = 'Only my master can touch.';

  // Only its class and sub-class of its class

  protected $loyallty = 'Loyallty my master and his friends.';

  // Private Access

  function touchIt() {
    return $this->touch;
  }
  function loyallHim() {
    return $this->loyallty;
  }
}
class Dog extends Animal {}

$obj = new Animal();
// Public access
echo $obj->name;
echo '<br>';
//Private access
echo $obj->touchIt();
echo '<br>';
//Protected access
echo $obj->loyallHim();
echo '<br>';
//Protected access from sub-class
$dog = new Dog();
echo $dog->loyallHim();