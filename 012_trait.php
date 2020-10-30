<?php
/*
Traits use when we want to extend two or more class
*/
trait Name {
  public $name = "Aung Myat Moe";
  public function adress(){
    echo 'Letpadan,Bago,Myanmar';
  }
}
trait Age {
  public $age = 17;
}
trait Background {
  public $background = '1st Year Physics Major Student!';
}
// Assign All Trait In One Trait
trait Bio{
  use Name,Age,Background;
}
// Just use assigned trai
class Detail{
  use Bio;
}

$amm = new Detail();
echo $amm->name;
echo '<br>';
echo $amm->adress();
echo '<br>';
echo $amm->age;
echo '<br>';
echo $amm->background;