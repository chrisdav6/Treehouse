<?php

//Working with function arguments

//01-passing an argument as a string
function yourName($name) {
  echo("<p>Passing a function argument as a string - Your name is <span style='color: green; font-weight: bold;'>$name</span>");
}

yourName("Chris");


//02-passing multiple string arguments to a function
function greeting($greeting, $name) {
  echo("<p>Passing multiple string arguments to a function - <span style='color: green; font-weight: bold;'>$greeting $name</span></p>");
}

greeting("Howdy", "Chris");


//03-passing an argument as an integer
function multiplyNumbers($number) {
  echo("<p>Passing a function argument as an integer - Your number multiplied by itself is <span style='color: green; font-weight: bold;'>" . $number * $number . "</span></p>");
}

multiplyNumbers(8);


//04-passing multiple integer arguments to a function
function multiplyTwoNumbers($number1, $number2) {
  echo("<p>Passing multiple integer arguments to a function - Your two numbers $number1 and $number2 multiplied together is <span style='color: green; font-weight: bold;'>" . $number1 * $number2 . "</span></p>");
}

multiplyTwoNumbers(2, 5);


//05-passing an argument as an array
$myArray = ["Chris", "Colleen", "Scott"];

function sayHello($myArray) {
  echo("<p style='margin-top: 40px;'>Passing a function argument as an array</p>");
  foreach($myArray as $name) {
    echo("<p>Hello <span style='color: green; font-weight: bold;'>$name</span></p>");
  }
}

sayHello($myArray);

?>