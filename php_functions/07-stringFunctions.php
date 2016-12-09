<?php

//Working with string functions

//01-strlen() will return the length of a string
function stringLength($name) {
	return "<p>The length of the variable \$name with the string value \"" . $name . "\" is " . strlen($name) . " characters</p>";
}

$chris = stringLength("Chris");
echo($chris);

$colleen = stringLength("Colleen");
echo($colleen);

//strlen() will also count spaces between characters
$phrase = stringLength("This is an entire sentence!");
echo($phrase);


//02-substr() will return the string starting at the first integer value argument, in this case 5
function mySubstring($sub){
	return "<p>The substring of the variable \$sub with the string value \"$sub\" starting at the 5th character is - " . substr($sub, 5) . "</p>";
}

$subString1 = mySubstring("This is my string");
echo($subString1);

//if you pass a second integer value argument, that will determing the length of the string
function mySubstring2($sub){
	return "<p>The substring of the variable \$sub with the string value \"$sub\" starting at the 5th character and only 5 characters long is - " . substr($sub, 5, 5) . "</p>";
}

$subString2 = mySubstring2("This is my string");
echo($subString2);

?>