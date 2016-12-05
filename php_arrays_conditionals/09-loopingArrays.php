<?php

//Using an each loop to loop over an indexed array
$myArray = ["Chris", "Colleen", "Bill", "Claudette"];

while(list($key, $val) = each($myArray)) {
  echo("<p>" . $key . " - " . $val . "</p>");
};

?>