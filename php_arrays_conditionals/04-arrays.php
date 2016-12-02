<?php

//01 Indexed Array
$myIndexedArray = ["Chris", "Colleen", "Scott"];
echo("<p style='font-size: 20px;'>My indexed array value at index 0 = <span style='color: red; font-size: 20px;'>$myIndexedArray[0]</span></p>");

//Implode will convert an array to a string - the first argument is used as a seperator
$myString = implode(" - ", $myIndexedArray);
echo("<p style='font-size: 20px;'>My complete indexed array = <span style='color: blue; font-size: 20px;'>$myString</span></p>");


//02 Adding new elements to the end of an array using the [] method
$myArray = ["red", "green", "blue"];
$myString = implode(" - ", $myArray); 
echo("<p style='font-size: 20px;'>My new indexed array = <span style='color: orange; font-size: 20px;'>$myString</span></p>");

//Add new element to array
$myArray[] = "orange";
$myString = implode(" - ", $myArray);
echo("<p style='font-size: 20px;'>Adding a new element to the end of my array using [] methond = <span style='color: orange; font-size: 20px;'>$myString</span></p>");


//03 Adding new elements to the end of an array using the array_push() function
//If array index was 1,3,5 array_push() will add 6. New array index will be 1,3,5,6
array_push($myArray, "purple", "grey");
$myString = implode(" - ", $myArray);
echo("<p style='font-size: 20px;'>Adding a new elements to the end of my array using push_array() function = <span style='color: salmon; font-size: 20px;'>$myString</span></p>");


//04 Adding new elements to the beginning of an array using the array_unshift() function
//array_unshift() will reset the index. If array index was 1,3,5 the new array index will be 0,1,2,3
array_unshift($myArray, "black", "white");
$myString = implode(" - ", $myArray);
echo("<p style='font-size: 20px;'>Adding a new elements to the beginning of my array using array_unshift() function = <span style='color: steelblue; font-size: 20px;'>$myString</span></p>");


//05 Removing elements from the beginning of an array using the array_shift() function
//array_shift() will return the shifted element which can be stored in a variable
//array_shift() will reset the index.
$myShift = array_shift($myArray);
$myString = implode(" - ", $myArray);
echo("<p style='font-size: 20px;'>Removing elements from the beginning of an array using the array_shift() function = <span style='color: magenta; font-size: 20px;'>$myString</span> - $myShift was removed!</p>");


//06 Removing elements from the end of an array using the array_pop() function
//array_pop() will return the popped element which can be stored in a variable
//array_pop will reset the index.
$myPop = array_pop($myArray);
$myString = implode(" - ", $myArray);
echo("<p style='font-size: 20px;'>Removing elements from the end of an array using the array_pop() function = <span style='color: tomato; font-size: 20px;'>$myString</span> - $myPop was removed!</p>");

//07 Removing elements from an array using the unset() function
//unset() will take multiple parameters
//unset() will not alter index. If index was 0,1,2,3 and you removed the second element, the new index would be 0,2,3
unset($myArray[0], $myArray[1]);
$myString = implode(" - ", $myArray);
echo("<p style='font-size: 20px;'>Removing elements from an array using the unset() function = <span style='color: dimgray; font-size: 20px;'>$myString</span> - white and red was removed!</p>");


//08 Re-Indexing elements in an array using the array_values() function
//array_values() will reset index. If index was 0,5,8,10 the new index would be 0,1,2,3
array_values($myArray);
$myString = implode(" - ", $myArray);
echo("<p style='font-size: 20px;'>Re-Indexing elements in an array using the array_values() function = <span style='color: darkblue; font-size: 20px;'>$myString</span> - Index is reset to 0,1,2,3</p>");


?>