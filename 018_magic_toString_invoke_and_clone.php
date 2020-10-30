<?php

class Animal {
  /**
  * When obj is converted to string
  *
  * */
  function __toString() {
    return 'Object cannot converted to strimg!';
  }
  /**
  * When obj is call as method
  *
  * */
  function  __invoke() {
    echo 'You are trying to call Object as Method!';
  }
  /**
  * when obj is clone
  *
  * */
  function __clone() {
    echo 'You are cloning '.__CLASS__;
  }
}

$cat = new Animal();
echo $cat;
echo '<hr>';
echo $cat();
echo '<hr>';
$tiger = clone $cat;

