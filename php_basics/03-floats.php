<?php

//floating point numbers
$distance_home = 1.2;
$distance_to_work = 2.5;

//whole numbers
$distance_to_store = 5;

//adding two floating point numbers results in a floating point number
var_dump($distance_home + $distance_to_work);

//adding two floating point numbers with a whole number will still result in a floating point number
var_dump($distance_home + $distance_to_work + $distance_to_store);

?>