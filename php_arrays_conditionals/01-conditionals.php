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


//Using the greater than comparison operator to test if one variable is larger in value than the other
$score = 59;

if($score >= 60) {
  echo("<p style='color: green; font-weight: bold;'>Great Job! Your score is $score, and you completed the level</p>");
}else {
  echo("<p style='color: red; font-weight: bold;'>So Sorry! Your score is $score, and you FAILED!</p>");
}



//Using the negation operator to test if one variable is not equal in value to the other
$c = 10;
$d = 10;

if($c != $d) {
  echo("The value of variable <span style='color: red; font-weight: bold;'>\$c</span> $c is NOT equal to the value of variable <span style='color: blue; font-weight: bold;'>\$d</span> $d");
}else {
  echo("The value of variable <span style='color: red; font-weight: bold;'>\$c</span> $c is equal to the value of variable <span style='color: blue; font-weight: bold;'>\$d</span> $d");
}


//Using the negation operator to test if one variable is not identical in value and type to the other
$e = 10;
$f = "10";

if($e !== $f) {
  echo("<p>The value and type of variable <span style='color: red; font-weight: bold;'>\$e</span> $e is NOT identical to the value and type of variable <span style='color: blue; font-weight: bold;'>\$f</span> $f</p>");
}else {
  echo("<p>The value and type of variable <span style='color: red; font-weight: bold;'>\$e</span> $e is identical to the value and type of variable <span style='color: blue; font-weight: bold;'>\$f</span> $f</p>");
}

?>