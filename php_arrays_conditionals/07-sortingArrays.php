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
var_dump($myArray);

?>