<?php

$a = 5;
$b = 10;

//$a multiplied by $b will return a whole number (int) since the answer is a whole number
var_dump($a * $b);

//$a divided by $b will return a floating point number (float) since the answer is a floating point number
var_dump($a / $b);

//Incrementing long version
$a = $a + 1;
var_dump($a);

//Incrementing short version
$a++;
var_dump($a);

//Decrementing long version
$a = $a - 1;
var_dump($a);

//Decrementing short version
$a--;
var_dump($a);

//Combined operator long version
$b = $b + 10;
var_dump($b);

//Combined operator short version
$b += 10;
var_dump($b);

?>