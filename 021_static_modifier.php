<?php

/**
 * Static store data at memory not in class
 * So when create obj or involk it is not destroy
 * 
 * */
class Index {
  private static $num = 0;
  function __construct() {
    self::$num++;
    echo self::$num.'<br>';
  }
}

new Index();
new Index();
new Index();