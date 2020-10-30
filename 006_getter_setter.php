<?php

class Animal {

  private $name = "နို့ဆီ";

  public function getName() {
    return $this->name;
  }
  public function setName($name) {
    $this->name = $name;
  }
}

//Get Private properiy by using public  function -> getName

$cat = new Animal();
echo $cat->getName();
echo '<br>';

//Set Private properiy by using public function -> setName

$cat->setName('Noo Se');
echo $cat->getName();