<?php
class Animal {
  public function __construct() {
    echo 'I am Parent !';
  }
}
class Dog extends Animal {
  public function __construct() {
    parent::__construct();
    // echo 'I am child!';
  }
}
new Dog;