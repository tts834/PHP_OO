<?php

class Animal {
  /**
  * @method name
  * @args names
  * when method is not exist
  * */
  function __call($name, $args) {
    echo "There is no {$name} and <pre>".print_r($args, true)."</pre>";
  }
  /**
  * @method name
  * @args name
  * when static method is not exist
  * */
  static  function __callstatic($name, $args) {
    echo "There is no static {$name} and <pre>".print_r($args, true)."</pre>";
  }
}
//non-static
$cat = new Animal();
echo $cat->callName('Cat');
echo '<hr>';
//static
Animal::callAge();