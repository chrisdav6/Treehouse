<?php

//Working with defualt function arguments
//$name = "Chris" will set the argument defualt value to the string "Chris"
function helloName($name = "Chris") {
	echo("<p>Hello $name");
}

//If the argument is left blank when calling the function, the default value is used
helloName();

//Otherwise, the argument value passed when calling the function is used
helloName("Scott");

?>