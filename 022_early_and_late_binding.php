<?php

class Main {
  function  className() {
    return __CLASS__;
  }
  
  /** 
   * Late binding
   * */
   
  static function  getClassName() {
    echo static::className();
  }
}
/**
 * @Override
 * 
 * */
 
class Son extends Main {
  function className() {
    return __CLASS__;
  }
}

$parent = new Main();
$parent->getClassName();
echo '<hr>';
$son = new Son();
$son->getClassName();