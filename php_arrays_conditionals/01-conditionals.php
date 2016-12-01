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
  echo("<p>The value of variable <span style='color: red; font-weight: bold;'>\$c</span> $c is NOT equal to the value of variable <span style='color: blue; font-weight: bold;'>\$d</span> $d</p>");
}else {
  echo("<p>The value of variable <span style='color: red; font-weight: bold;'>\$c</span> $c is equal to the value of variable <span style='color: blue; font-weight: bold;'>\$d</span> $d</p>");
}


//Using the negation operator to test if one variable is not identical in value and type to the other
$h = 10;
$i = "10";

if($h !== $i) {
  echo("<p>The value and type  of variable <span style='color: red; font-weight: bold;'>\$h</span> $h is NOT identical to the value and type of variable <span style='color: blue; font-weight: bold;'>\$i</span> $i</p>");
}else {
  echo("<p>The value and type of variable <span style='color: red; font-weight: bold;'>\$h</span> $h is identical to the value and type of variable <span style='color: blue; font-weight: bold;'>\$i</span> $i</p>");
}


//Testing for Truthy of Falsey values
$e = 1;
$f = 0;
$g = "";

if($e) {
  echo("<p>The value of the variable \$e is $e and is true</p>");
}

if($f) {
  echo("<p>The value of the variable \$f is $f and is true</p>");
}else {
  echo("<p>The value of the variable \$f is $f and is false</p>");
}

if($g) {
  echo("<p>The value of the variable \$g is $g and is true</p>");
}else {
  echo("<p>The value of the variable \$g is an empty string $g and is false</p>");
}


//Working with nested conditional statements
$num1 = 800;

if($num1 > 500) {
	if($num1 < 1000) {
		echo("<p>The variable \$num1 with a value of $num1 is greater than 500 and less than 1000</p>");
	}else {
		echo("<p>The variable \$num1 with a value of $num1 is greater than 500 but is not less than 1000</p>");
	}
} else {
  echo("<p>The variable \$num1 with a value of $num1 is not greater than 500</p>");
}

?>