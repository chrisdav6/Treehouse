<?php

//Working with built in array functions

//01-array_keys() will return all of the key values of the array
$myArray = [
	"name" => "Chris",
	"age" => 40,
	"instrument" => "Guitar",
	"amp" => "Marshall",
	"otherInstrument" => "Drums"
];

$counter = 1;

foreach(array_keys($myArray) as $value) {
	if($counter == 1) {
		echo("<p>The " . $counter . "st key in my array is $value");
		$counter++;
	} elseif($counter == 2) {
		echo("<p>The " . $counter . "nd key in my array is $value");
		$counter++;
	} elseif($counter == 3) {
		echo("<p>The " . $counter . "rd key in my array is $value");
		$counter++;
	} else {
		echo("<p>The " . $counter . "th key in my array is $value");
		$counter++;
	}
}

$myKeys = array_keys($myArray);
echo("<p>" . implode(", ", $myKeys) . "</p>");


//02-array_walk() will pass a function to every index of the array
$myArray2 = [
  "Honda" => "Spoon Sports",
  "BMW" => "Team Studie",
  "Nissan" => "Calsonic"
];

function printCars($value, $key) {
  echo("<p>$value is a car tuner that works with $key</p>");
}

array_walk($myArray2, "printCars");

?>