<?php

//Sorting arrays with asort(), sort() and rsort()

//01 Sorting an indexed array with asort()
//asort() will reorder the array based on its value and will not re-index array
$myArray = [1,3,0,5];
echo("<p>My indexed array before asort() = " . implode(", ", $myArray));
asort($myArray);
echo(" - My indexed array after asort() = " . implode(", ", $myArray) . "</p>");


//02 Sorting an indexed array with sort()
//sort() will reorder the array based on its value and will re-index array
$myArray = [1,3,0,5];
echo("<p>My indexed array before sort() = " . implode(", ", $myArray));
sort($myArray);
echo(" - My indexed array after sort() = " . implode(", ", $myArray) . "</p>");


//03 Sorting an indexed array with rsort()
//rsort() will reorder the array based on its value in reverse and will re-index array
$myArray = [1,3,0,5];
echo("<p>My indexed array before rsort() = " . implode(", ", $myArray));
rsort($myArray);
echo(" - My indexed array after rsort() = " . implode(", ", $myArray) . "</p>");


//04 Sorting an indexed array randomly with shuffle()
//shuffle() will reorder the array based on its value randomly and will re-index array
$myArray = [1,3,0,5];
echo("<p>My indexed array before shuffle() = " . implode(", ", $myArray));
shuffle($myArray);
echo(" - My indexed array after shuffle() = " . implode(", ", $myArray) . "</p>");


//05 Sorting an associative array alphabetically by key with ksort()
$myArray2 = [
  "scott" => "integra",
  "colleen" => "accord v6",
  "bill" => "outback",
  "chris" => "s2000"
];
echo("<p>My associative array before ksort() = " . implode(", ", $myArray2));
ksort($myArray2);
echo(" - My associative array after ksort() = " . implode(", ", $myArray2) . "</p>");


//06 Sorting an associative array alphabetically by key in reverse with krsort()
$myArray2 = [
  "scott" => "integra",
  "colleen" => "accord v6",
  "bill" => "outback",
  "chris" => "s2000"
];
echo("<p>My associative array before krsort() = " . implode(", ", $myArray2));
krsort($myArray2);
echo(" - My associative array after krsort() = " . implode(", ", $myArray2) . "</p>");


//07 Sorting an associative array alphabetically by value with asort()
$myArray2 = [
  "scott" => "integra",
  "colleen" => "accord v6",
  "bill" => "outback",
  "chris" => "s2000"
];
echo("<p>My associative array before asort() = " . implode(", ", $myArray2));
asort($myArray2);
echo(" - My associative array after asort() = " . implode(", ", $myArray2) . "</p>");

?>