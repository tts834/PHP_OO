<?php

class Car{
  public $carBrand,$carPrice;
  function __construct($carBrand,$carPrice){
    $this->carBrand = $carBrand;
    $this->carPrice = $carPrice;
  }
  function getBrand(){
    return $this->carBrand;
  }
  function getPrice(){
    return $this->carPrice;
  }
}
class Driver{
  public $driverName,$driverPrice;
  function __construct($driverName,$driverPrice){
    $this->driverName = $driverName;
    $this->$driverPrice = $driverPrice;
  }
  function getDriverName(){
    return $this->driverName;
  }
  function getDriverPrice(){
    return $this->driverPrice;
  }
}
class Rent{
  public $car,$driver;
  function __construct(Car $car,Driver $driver){
    $this->car = $car;
    $this->driver = $driver;
  }
  function getCar():Car{
    return $this->car;
  }
  function getDriver(){
    return $this->driver;
  }
  
}
$toyota =  new Car('Toyota',20000);
$marcedii =  new Car('Marceedi',34550);
$aung_aung = new Driver('Aung Aung',200);
$mg_mg = new Driver('Maung Maung',100);

$rent1 = new Rent($toyota,$aung_aung);
$rent2 = new Rent($marcedii,$mg_mg);
$list = [$rent1,$rent2];
echo $list[0]->getDriver()->getDriverName();