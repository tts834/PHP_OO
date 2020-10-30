<?php
class Animal{
  
  //Giving default method is overloading
  //php method overloading is different from other OO language
  
  public function callName($default = 'Default'){
    return $default;
  }
}
$obj = new Animal();

//$obj->callName('Aung Myat Moe');
echo $obj->callName();