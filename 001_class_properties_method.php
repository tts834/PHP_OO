<?php

class People {

  // Properties @public => Access Modifier

  public $name = 'Aung Myat Moe';

  //Method

  public function code() {
    return 'Aung Myat Moe is coding.';
  }
}

// Class  Initialization
// new People() -> invoke
//$obj -> instance obj

$obj = new People();

// Call to class properties

echo $obj->name;
echo '<br>';

//Call to class method

echo $obj->code();