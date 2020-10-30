<?php

/*
$this is point to the instance object that make calling to function
*/

class Animal {
  public $name = "Aung Myat Moe";
  public function callName() {
    $this->name = "Noo Se";
  }
}

//Not calling to function
$obj1 = new Animal();
echo $obj1->name;
echo '<br>';

// calling to function
$obj2 = new Animal();
$obj2->callName();
echo $obj2->name;