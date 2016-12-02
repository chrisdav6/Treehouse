<?php

//01 Indexed Array
$myIndexedArray = ["Chris", "Colleen", "Scott"];
echo("<p style='font-size: 20px;'>My indexed array value at index 0 = <span style='color: red; font-size: 20px;'>$myIndexedArray[0]</span></p>");

//Implode will convert an array to a string - the first argument is used as a seperator
$myString = implode(" - ", $myIndexedArray);
echo("<p style='font-size: 20px;'>My complete indexed array = <span style='color: blue; font-size: 20px;'>$myString</span></p>");


//02 Adding new elements to the end of an array using the [] method
$myArray = ["red", "green", "blue"];
$myString2 = implode(" - ", $myArray); 
echo("<p style='font-size: 20px;'>My new indexed array = <span style='color: orange; font-size: 20px;'>$myString2</span></p>");

//Add new element to array
$myArray[] = "orange";
$myString2 = implode(" - ", $myArray);
echo("<p style='font-size: 20px;'>Adding a new element to the end of my array using [] methond = <span style='color: orange; font-size: 20px;'>$myString2</span></p>");


//03 Adding new elements to the end of an array using the array_push() function
//If array index was 1,3,5 array_push() will add 6. New array index will be 1,3,5,6
array_push($myArray, "purple", "grey");
$myString2 = implode(" - ", $myArray);
echo("<p style='font-size: 20px;'>Adding a new elements to the end of my array using push_array() function = <span style='color: salmon; font-size: 20px;'>$myString2</span></p>");


//04 Adding new elements to the beginning of an array using the array_unshift() function
//If array index was 1,3,5 array_unshift() will reset the index. New array index will be 0,1,2,3
array_unshift($myArray, "black", "white");
$myString2 = implode(" - ", $myArray);
echo("<p style='font-size: 20px;'>Adding a new elements to the beginning of my array using array_unshift() function = <span style='color: steelblue; font-size: 20px;'>$myString2</span></p>");


?>