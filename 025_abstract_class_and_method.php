<?php

abstract class Main {
  
  public function doIt() {
    return 'I am doing it.';
  }
  
  /**
   * Abstract methods must be public
   * must override when extends
   * must abstract class
   * */
   
  public abstract function mainAbstract();
}

class Son extends Main{
  
  //Override
  
  public function mainAbstract(){
    return 'I  am mainAbstract';
  }
}
$son = new Son();
echo $son->doIt();