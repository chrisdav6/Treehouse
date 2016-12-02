<?php

//Working with switch statements

//Day variable for manual manipulation of the switch statement
$day = "Sunday";

//php date function variable
$date = date("l");

switch($date) {
  case "Monday":
    echo("Today is Monday!");
    break;
  case "Tuesday":
    echo("Today is Tuesday!");
    break;
  case "Wednesday":
    echo("Today is Wednesday!");
    break;
  case "Thursday":
    echo("Today is Thursday!");
    break;
  case "Friday":
    echo("Today is Friday!");
    break;
  case "Saturday":
    echo("Today is Saturday!");
    break;
  default:
    echo("Finally, the day of Rest!");
    break;
}

?>