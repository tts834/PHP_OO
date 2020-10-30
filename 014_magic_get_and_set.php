<?php

// __set & __get magic method

class Animal {
  /*
  @param
  if property is not exist
  */
  function __get($var) {
    echo "{$var} property is not exist in this ".__CLASS__;
  }
  /*
  @param1
  @param2
  if set value that is not exists in its class
  */

  function __set($var, $val) {
    echo "{$var} property can't set with this {$val}";
  }
}

$cat = new Animal();
//Get
echo $cat->name;

echo '<hr>';

//Set
$cat->name = 'Noop Si';