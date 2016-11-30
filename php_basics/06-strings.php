<?php

//Single Quotes will not expand variable values or work with escape sequences such as \n

$name = "Ya Dingus!";
$string_one = 'Hello $name\n';
echo($string_one);

//Double Quotes will expand variable values and work with escape sequences such as \n

$name2 = "Symphia Dangus!";
$string_two = "\nHello $name2\n";
echo($string_two);

?>