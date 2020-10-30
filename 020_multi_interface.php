<?php

/**
 * Multi Interface
 * 
 * */
 
 interface Boy
 {
  public function setBoyName($name);
 }
 
 interface Girl
 {
  public function setGirlName($name);
 }
 
 class Index implements Boy,Girl{
   private $name;
   function setBoyName($name){
     $this->name  = $name;
   }
   function setGirlName($name){
     $this->name  = $name;
   }
   function getName(){
     echo $this->name;
   }
 }
 
 $boy = new Index();
 $boy->setBoyName('Aung Myat Moe');
 $boy->getName();
 echo "<hr>";
 $girl = new Index();
 $girl->setGirlName('Wuttyi');
 $girl->getName();