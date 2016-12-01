<?php

//Using the equal comparison operator to test if two variables are equal in value
$a = 5;
$b = 5;

if($a == $b) {
  echo("The value of variable <span style='color: red; font-weight: bold;'>\$a</span> $a is equal to the value of variable <span style='color: blue; font-weight: bold;'>\$b</span> $b");
}elseif($a < $b) {
  echo("The value of variable <span style='color: red; font-weight: bold;'>\$a</span> $a is Less than the value of variable <span style='color: blue; font-weight: bold;'>\$b</span> $b");
}else {
  echo("The value of variable <span style='color: red; font-weight: bold;'>\$a</span> $a is NOT equal to the value of variable <span style='color: blue; font-weight: bold;'>\$b</span> $b");
}

?>