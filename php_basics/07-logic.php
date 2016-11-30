<?php

$a = 10;
$b = "10";

//This will compare $a and $b for value and type (strict comparison)
if($a === $b) {
  echo("The integer $a is identical to the string $b\n");
}elseif($a === "") {
  echo("Variable \$a is empty\n");
}elseif($b === "") {
  echo("Variable \$b is empty\n");
}else {
  echo("The integer $a is NOT identical to the string $b\n");
}

//This will compare $a and $b for value only
if($a == $b) {
  echo("The integer $a is equal to the string $b\n");
}elseif($a == "") {
  echo("Variable \$a is empty\n");
}elseif($b == "") {
  echo("Variable \$b is empty\n");
}else {
  echo("The integer $a is NOT equal to the string $b\n");
}


?>