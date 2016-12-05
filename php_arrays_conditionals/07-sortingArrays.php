<?php

//Sorting arrays with asort(), sort() and rsort()

//Sorting an indexed array with asort()
//asort will reorder the array based on its value and will not re-index array
$myArray = [1,3,0,5];
echo("My indexed array before asort = " . implode(", ", $myArray));
asort($myArray);
echo(" - My indexed array after asort = " . implode(", ", $myArray));

?>