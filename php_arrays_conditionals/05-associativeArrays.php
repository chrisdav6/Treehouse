<?php

//Working with associative arrays
$carTuners = [
  "spoon" => "EK9",
  "realtime" => "TSX",
  "nismo" => "GTR",
  "reAmemiya" => "RX7"
];

$myString = "<p style='color: steelblue; font-size: 20px;'>";
$myString .= "Spoon Sports has spent many years developing the " . $carTuners["spoon"];
$myString .= "</p>";
echo($myString);

?>