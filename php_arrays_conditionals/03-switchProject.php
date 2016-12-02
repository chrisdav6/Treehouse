<?php

//Switch Statement Project - Student Grade Analysis

$student = "Chris";
$grade = 12;
$average = 69;
$message = "";

if(!$student) {
  //If the student name is left empty
  echo("Please enter a student name");
}elseif($grade < 9 || $grade > 12) {
  //If the student grade is less than 9 or more than 12
  echo("Please enter a grade between 9 through 12 only!");
}else {
  //If the student average is less than 70
  if($average < 70) {
  	$message = "<p>We are sorry to inform you that you FAILED grade $grade because you are a dingus and your average was only <span style='color: red; font-weight: bold;'>$average</span>!</p>";
    echo("<p>Dear $student,</p>");
    echo($message);
  }else {
  	//If the student grade is more than 70 construct a congratulatory message based on the student current grade
  	switch($grade) {
      case 9:
        $message = "<p>Congratulations! You passed the 9th grade with an average of <span style='color: green; font-weight: bold;'>$average</span>!</p>";
  	    echo("<p>Dear $student,</p>");
        echo($message);
        break;
      case 10:
        $message = "<p>Congratulations! You passed the 10th grade with an average of <span style='color: green; font-weight: bold;'>$average</span>!</p>";
  	    echo("<p>Dear $student,</p>");
        echo($message);
        break;
      case 11:
        $message = "<p>Congratulations! You passed the 11th grade with an average of <span style='color: green; font-weight: bold;'>$average</span>!</p>";
  	    echo("<p>Dear $student,</p>");
        echo($message);
        break;
      case 12:
        $message = "<p>Congratulations! You graduated with an average of <span style='color: green; font-weight: bold;'>$average</span>! Now get outta hear! Lols!</p>";
  	    echo("<p>Dear $student,</p>");
        echo($message);
        break;
      default:
        echo("Something went wrong ya dingus!");
        break;
  	}
  }	
}

?>