<?php

/*  Type Hint Funxtions */

function getVal($val) {

  /**
  * is_int()
  * is_string()
  * is_float()
  * is_bool()
  * is_array()
  * is_null()
  * */

  echo is_int($val) ? $val : die('Something wrong!');
}
getVal(2);

echo '<hr>';

/* Type Casting */
/**
* int
* string
* bool
* float
* array
* */

function castIt(array $num) {
  echo 'Good To Go!';
}

castIt([0, 1]);

echo '<hr>';

/* Object Type Casting */

class Animal {}
class Cat {
  function getObj(Animal $obj) {
    echo 'I am obj!';
  }
}
$animal = new Animal();
$cat = new Cat();
$cat->getObj($animal);

echo '<hr>';

/* Return Type Casting */

/**
* :int
* :string
* :float
* :bool
* */

function returnIt(int $num):string {
  return 'I am string!';
}

echo returnIt(10);