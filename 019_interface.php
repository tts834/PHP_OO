<?php

/**
 * interface
 * only methods without body block
 * */
 
interface Doit
{
  public function getName();
  public function setName($name);
}
/**
 * When implements the interface 
 * Override all methods
 * 
 * */
class Man implements Doit{
  private $name;
  function getName(){
    echo 'I am  get  Name';
  }
  function setName($name){
    $this->name = $name;
    echo 'I am '.$name;
  }
  function getNewName(){
    echo $this->name;
  }
}

$obj = new Man;
$obj->getName();
echo '<br>';
$obj->setName('Aung Myat Moe');
echo '<br>';
$obj->getNewName();