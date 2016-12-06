<?php

//Working with multi-dimensional arrays, forEachLoops and conditional statements
//Todo list

$task1 = [
  "title" => "Wash S2000",
  "priority" => 1,
  "due" => "12/8/2016",
  "complete" => true
];

$task2 = [
  "title" => "Store DMV plates for S2000 for winter storage",
  "priority" => 2,
  "due" => "12/9/2016",
  "complete" => true
];

$task3 = [
  "title" => "Notify insurance company that S2000 plates have been stored for winter",
  "priority" => 3,
  "due" => "12/9/2016",
  "complete" => false
];

$task4 = [
  "title" => "Change Oil in S2000",
  "priority" => 4,
  "due" => "12/17/2016",
  "complete" => false
];

$task5 = [
  "title" => "Pump up tires in S2000 to 45psi for winter storage",
  "priority" => 4,
  "due" => "12/17/2016",
  "complete" => false
];

$task6 = [
  "title" => "Remove battery from S2000 for winter storage",
  "priority" => 4,
  "due" => "12/17/2016",
  "complete" => false
];

$task7 = [
  "title" => "Spring time is here! Change LSD fluid in S2000 and put back on the road! Yay!!!",
  "priority" => 5,
  "due" => "4/20/2017",
  "complete" => false
];

$list = [
  $task1,
  $task2,
  $task3,
  $task4,
  $task5,
  $task6,
  $task7
];

foreach($list as $item) {
  if($item["complete"] == true) {
    echo("<p><span style='color: green;'>Task Completed </span>" . " : " . $item["title"] . "</p>");
  } else {
    echo("<p><span style='color: red;'>Task due on - " . $item["due"] . "</span>" . " : " . $item["title"] . "</p>");
  } 
};



?>