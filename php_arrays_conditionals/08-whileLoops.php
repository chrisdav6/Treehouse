<?php

//01-Working with doWhile loops - doWhile loops will always run once

//This doWhile loop will echo my string with the integer value of $myVar
//then add 1 to the value of $myVar. If the value of $myVar is less
//than 10 it will run again, otherwise the loop will stop
$myVar = 0;

do{
  echo("<p>My number variable is now at - " . $myVar . "</p>");
  $myVar++;
}while($myVar < 10);


//02-Working with while loops

//This while loop will echo my string with the integer value of $currentYear
//then add 1 to the value of $currentYear. If the value of $currentYear is less
//than 2010 it will run again, if the $cuurentYear is == 2006 it will echo("Not a great year"),
//otherwise the loop will stop
$currentYear = 1994;

while($currentYear !== 2010){
  echo("<p>" . $currentYear . " was a great year!</p>");
  if($currentYear == 2006) {
    echo("<p>" . $currentYear . " wasn't really that great of a year :(</p>");
  }
  $currentYear++;
};

?>