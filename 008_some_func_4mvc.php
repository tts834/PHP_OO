<?php
class Animal {

  public function cat() {
    // I am declared method
  }
}

/* Normal Funxtion */
echo '<h2>Check Function Exist</h2>';
function normal() {}
if (function_exists('normal'))
  echo 'I am here!';
else
  echo 'No';

/* Initialize Class */

$animal = new Animal();

/* Check Method Exist or not */

if (method_exists($animal, 'cat'))
  echo 'I am exist.';
else
  echo 'I am not.';
echo '<hr>';
echo '<h2>Declared Class</h2>';

/* Echo All Declared Classes */

$classes = get_declared_classes();
foreach ($classes as $class) {
  echo $class.'<br>';
}
echo '<hr>';

/* Echo All Declared Method In Individually */

echo '<h2>Declared Method</h2>';
$methods = get_class_methods('Animal');
foreach ($methods as $method) {
  echo $method.'<br>';
}