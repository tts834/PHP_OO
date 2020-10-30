<?php

class Cat{
  private  $name = 'Noose Si';
  private static $instance;
  /**
   * Private Constructor cannot invoke 
   * */
  private  function __construct(){
    return $this->name;
  }
  /**
   * To access class
   * */

  public static function getInstance(){
    /**
     * Return if null
     * */
    if(self::$instance == null){
      self::$instance = new Cat();
    }
    /**
     * Return If Not null
     * One time return
     * */
    return self::$instance;
  }
  function getName(){
    return $this->name;
  }
}
/**
 * Cannot Direct access to class 
 * */
$obj = Cat::getInstance();
echo $obj->getName();
