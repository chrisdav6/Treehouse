<?php

//01-Working with default function arguments
//$name = "Chris" will set the argument default value to the string "Chris"
function helloName($name = "Chris") {
	echo("<p>Hello $name</p>");
}

//If the argument is left blank when calling the function, the default value is used
helloName();

//Otherwise, the argument value passed when calling the function is used
helloName("Scott");


//02-Working with multiple default function arguments
function getInfo($name = "Chris", $title = "Artist") {
	echo("<p>$name has arrived, the $title");
}

//Calling the function with default argument values
getInfo();

//Calling the function with unique argument values
getInfo("Scott", "Chef");


//03-Working with multiple default and optional function arguments
function getMoreInfo($name = "Chris", $title = null) {
	if($title) {
    echo("<p>$name has arrived, the $title");
  } else {
    echo("<p>$name has arrived, our friend");
  }
}

//Calling the function with $title argument set
getMoreInfo("Colleen", "Nurse");

//Calling the function with $title argument not set
getMoreInfo("Bill");

?>