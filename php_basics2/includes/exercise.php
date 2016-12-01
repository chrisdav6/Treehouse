<?php
//PHP Exercise schedule app

//Store each exercise in a string variable
$exercise1 = "Display strings to the screen";
$exercise2 = "Working with integers";
$exercise3 = "Working with floating point numbers";
$exercise4 = "Working with operators";
$exercise5 = "Created a simple PHP unit converter";
$exercise6 = "Working with strings and concatenation";
$exercise7 = "Learning if/elseif/else logic";

//Create a variable containing the day of the week
//PHP date("N") will return a number for the day of the week, 1 = Monday, 7 = Sunday
$day = date("N");

//Use an if statement to test for the day of the week
//Display the exercise string for that given day of the week
if($day == 1) {
  echo("Today is Monday, PHP learning $exercise1\n");
}elseif($day == 2) {
  echo("Today is Tuesday, PHP learning $exercise2\n");
}elseif($day == 3) {
  echo("Today is Wednesday, PHP learning $exercise3\n");
}elseif($day == 4) {
  echo("Today is Thursday, PHP learning $exercise4\n");
}elseif($day == 5) {
  echo("Today is Friday, PHP learning $exercise5\n");
}elseif($day == 6) {
  echo("Today is Saturday, PHP learning $exercise6\n");
}elseif($day == 7) {
  echo("Today is Sunday, PHP learning $exercise7\n");
}

?>