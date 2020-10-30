<?php

// Normal Array

$ary = [
  'name' => 'Aung Myat Moe',
  'age' => 17,
  'adress' => 'Letpadan'
];

echo $ary['name'];

echo '<br>';

// Object Casting

$obj = (object) $ary;
echo $obj->name;