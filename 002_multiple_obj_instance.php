<?php

// Blueprint
class Animal {
  public $name;
  function callName() {
    // $this points to its parent class
    return 'The name of animal is '.$this->name. '.';
  }
}
//1st Instance Obj
$dog = new Animal();
$dog->name = 'Dog';
echo $dog->callName();

echo '<br>';

//2nd Instance Obj
$cat = new Animal();
$cat->name = 'Cat';
echo $cat->callName();