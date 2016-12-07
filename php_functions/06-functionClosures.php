<?php

//Working with function closures

$name = "Chris";

$greet = function() use($name) {
	echo("Hello $name");
};

$greet();

?>