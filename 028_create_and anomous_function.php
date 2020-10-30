<?php

/**
* Create Function
* */
$var1 = create_function('$num', 'return "$num";');
echo $var1('30');

echo '<hr>';

/**
* Anoumous Function
* Closure
* */

$num = 10; //global

$var2 = function (&$num) {
  $num = 50;
  return 'I am Anoumous and my number is '.$num;
};

echo $num; // global ->  10
echo '<br>';
echo $var2($num); // Closure -> 59

echo $num;//globale ->50