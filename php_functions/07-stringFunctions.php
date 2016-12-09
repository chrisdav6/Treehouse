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

?>