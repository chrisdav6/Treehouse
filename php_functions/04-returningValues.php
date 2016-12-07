<?php

//Returning function values

function sayHello($name) {
  return "<p>Hello $name</p>";
}

$myHello = sayHello("Chris");
echo($myHello);

$myHello2 = sayHello("Colleen");
echo($myHello2);

?>