<?php

//Unit converter app - Converts Pounds to kilograms & Miles to Kilometers


//Pound to Kilogram converter
//number in pounds that will be converted to kilograms
$pounds = 250;

//floating point value for the pounds to kilograms conversion
$lb_to_kg = 0.453592;

//calculates pounds multiplied by kilograms
$kilograms = $pounds * $lb_to_kg;

//display to screen
$poundsMessage = "Weight: " . $pounds . "lbs. - Converted to Kilograms = " . $kilograms . " Kilograms \n";
echo($poundsMessage);



//Mile to kilometer converter
//number in miles that will be converted to kilometers
$miles = 600;

//floating point value for the miles to kilometers conversion
$miles_to_kilometers = 1.60934;
  
//calculates miles multiplied by kilometers
$kilometers = $miles * $miles_to_kilometers;

//display to screen
$milesMessage = "Distance: " . $miles . "miles - Converted to Kilometers = " . $kilometers . " Kilometers \n";
echo($milesMessage);

?>