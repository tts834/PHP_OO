<?php

// Parent Class

class Animal{
  public $name;
}

// Sub class or inherit class
//@Overriding
class Dog extends Animal{
  function dogName($animal_name){
    $this->name = $animal_name;
    return $this->name.' is inherit from Animal Parent Obj.';
  }
}
$dog = new Dog();
echo $dog->dogName('Aung Net');