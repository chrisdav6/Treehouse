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

?>