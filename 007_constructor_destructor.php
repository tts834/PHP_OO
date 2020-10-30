<?php

class Animal{
  // can pass args
  public function __construct(){
    echo 'I am constructor function and working when class is involked.<br>';
  }
  //cannot pass args
  public function __destruct(){
    echo 'I am destructor function and work the end of the other xlass functions..';
  }
  
}
new Animal();