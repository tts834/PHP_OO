<?php

class Animal {
  public static $name = 'Cat';
  public static function callName() {
    // Use self like this to point its class
    // can use Animal::$name
    return self::$name;
  }
}
// :: <- scope resolution operator to access static properties or methods
$cat = new Animal();
echo $cat::$name;
echo '<br>';
echo Animal::$name;
echo '<br>';
// static method can access with ->
echo $cat->callName();
echo '<br>';
echo $cat::callName();