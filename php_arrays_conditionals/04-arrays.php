<?php

//Indexed Array
$myIndexedArray = ["Chris", "Colleen", "Scott"];
echo("<p style='color: red; font-size: 20px;'>$myIndexedArray[0]</p>");

//Implode will convert an array to a string - the first argument is used as a seperator
$myString = implode(" - ", $myIndexedArray);
echo("<p style='color: blue; font-size: 20px;'>$myString</p>");

?>