<?php

/*
  Local variable has limited life inside the function
  but global varibale is global for entire script except inside fuctions
  
  if we want to print global variable inside fuction, we need to redeclare it using 'global' keyword
*/

$b = 20;

function abc() {
  $a = 10;
  echo $a;
}

echo $b;
?>
