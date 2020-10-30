<?php

class Animal{
  /**
   * 
   * Work when serialize the class
   * return array
   * 
   * */
   function __sleep(){
     echo 'I am working when class is serialize.';
     return [];
   }
   /**
    * 
    * Work when unserialize the class
    * 
    * */
   
   function __wakeup(){
     echo 'I am working when class is unserialize.';
     return [];
   }
   
}
$obj = new Animal();
// Serial Obj
$serial = serialize($obj);
echo '<hr>';
// Unserialize Obj
unserialize($serial);