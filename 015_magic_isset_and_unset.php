<?php
class Animal
{
  /**
  * @param1
  * check property name when use isset()
  */
  function __isset($var) {
    echo "{$var} is not exist to set!";
  }
  /**
  * @param1
  * check property name when unset
  *
  * */
  function __unset($var) {
    echo "{$var} is not exist to unset!";
  }
}
$cat = new Animal();
isset($cat->name);
echo '<hr>';
unset($cat->name);