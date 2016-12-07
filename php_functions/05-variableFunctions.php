<?php

//Working with variable functions

//We create a function that returns a greeting
function sayHello($name) {
  return "<p>Hello $name</p>";
}

//Then we create a function that returns a different greeting
function sayHowdy($name) {
  return "<p>Howdy $name</p>";
}

//Then we assign a variable to each function
$greeting1 = "sayHello";
$greeting2 = "sayHowdy";

//Then we call this function a bunch of times throughout our code using the first greeting
echo($greeting1("Chris"));
echo($greeting1("John"));
echo($greeting1("Bill"));
echo($greeting1("Sean"));

//Now we decide that we would really like to use greeting2
//Since we used a variable function we can simply update the reference to the function rather than updating every instance of calling the function

$greeting1 = "sayHowdy";
$greeting2 = "sayHello";

echo($greeting1("Chris"));
echo($greeting1("John"));
echo($greeting1("Bill"));
echo($greeting1("Sean"));

?>