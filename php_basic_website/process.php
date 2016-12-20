<?php

$name = $_POST["name"];
$email = $_POST["email"];
$details = $_POST["details"];

$message = "Thank you $name for your interest.<br>";
$message .= "I have your email address as $email<br>";
$message .= "I have also received your message:  $details<br>";
$message .= "I will get back to you as soon as i can";
$message .= "<p>Best Regards,<br>Chris</p>";

echo($message);

  
?>