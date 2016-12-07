<?php

//Returning function values

//01-Returning string values from a function with a condition

function sayHello($name) {
  if(strtolower($name) == "chris") {
    return "<p>Hello $name</p>";
  } elseif(strtolower($name) == "dingus") {
    return "<p>Yes, you are a $name</p>";
  } else {
    return "<p>Howdy $name</p>";
  }
}

$myHello = sayHello("Chris");
echo($myHello);

$myHello2 = sayHello("Colleen");
echo($myHello2);

$myHello3 = sayHello("Dingus");
echo($myHello3);


//02-Returning integer values from a function with a condition

function multiplyNumbers($num1, $num2) {
  $value = $num1 * $num2;
  
  if($value < 10) {
    return "<p>The value of your numbers $num1 and $num2 multiplied is $value. That is a a small number";
  } elseif($value > 10 && $value < 100) {
    return "<p>The value of your numbers $num1 and $num2 multiplied is $value. That is a large number";
  } else {
    return "<p>The value of your numbers $num1 and $num2 multiplied is $value. That is a pretty a huge number";
  }
}

$myValue1 = multiplyNumbers(2, 2);
echo($myValue1);

$myValue2 = multiplyNumbers(10, 2);
echo($myValue2);

$myValue3 = multiplyNumbers(1000, 2);
echo($myValue3);

?>