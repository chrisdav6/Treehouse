<?php

//Working with for loops. Same syntax as javascript for loops

$year = 200;

for($counter = 100; $counter < $year; $counter++) {
  switch($counter) {
    case 110:
      echo("<p style='color: orange; font-size: 30px;'>The year is $counter</p>");
      break;
    case 120:
      echo("<p style='color: blue; font-size: 30px;'>The year is $counter</p>");
      break;
    case 130:
      echo("<p style='color: green; font-size: 30px;'>The year is $counter</p>");
      break;
    case 140:
      echo("<p style='color: red; font-size: 30px;'>The year is $counter</p>");
      break;
    case 150:
      echo("<p style='color: purple; font-size: 30px;'>The year is $counter</p>");
      break;
    case 160:
      echo("<p style='color: steelblue; font-size: 30px;'>The year is $counter</p>");
      break;
    case 170:
      echo("<p style='color: salmon; font-size: 30px;'>The year is $counter</p>");
      break;
    case 180:
      echo("<p style='color: lime; font-size: 30px;'>The year is $counter</p>");
      break;
    case 190:
      echo("<p style='color: darkblue; font-size: 30px;'>The year is $counter</p>");
      break;
    default:
      echo("<p>The year is $counter</p>");
      break;
  };
};

?>