<?php

//Single Quotes will not expand variable values or work with escape sequences such as \n
$name = "Ya Dingus!";
$string_one = 'Hello $name\n';
echo($string_one);

//Single Quotes will expand variable values with concatenation however escape sequences still will not work
$stringOneConcat = 'Hello '. $name . '\n';
echo($stringOneConcat);

//Double Quotes will expand variable values and work with escape sequences such as \n

$name2 = "Symphia Dangus!";
$string_two = "\nHello $name2\n";
echo($string_two);

//Another way to use concatenation is with the concatenation assignment operator .=
$name3 = "Barry ";
$name3 .= "Wilkenson ";
$name3 .= "Stevenson ";
$name3 .= "Davidson!\n";
echo($name3);

?>